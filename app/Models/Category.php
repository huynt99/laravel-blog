<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url_key',
        'parent_id'
    ];

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id','id')
            ->with('children');
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|\Illuminate\Support\HigherOrderCollectionProxy|mixed|string
     */
    public function getParentNameAttribute()
    {
        $parent =  $this->query()->find($this->parent_id);
        if ($parent)
            return $parent->name;
        return 'N/A';
    }
}
