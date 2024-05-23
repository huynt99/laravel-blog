<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $country_id
 * @property string $alpha_3_code
 * @property string $en_short_name
 * @property string $nationality
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereAlpha3Code($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereEnShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNationality($value)
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id', 'alpha_3_code', 'en_short_name', 'nationality'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
