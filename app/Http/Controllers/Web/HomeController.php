<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    private $users;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature = Post::orderBy('updated_at','desc')->take(4)->get();
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(Config::get('panelconfig.paginate.home'));

        if (empty($this->users)) {
            $this->users = User::select('id', 'first_name', 'last_name')->get();
        }
        foreach ($posts as &$post) {
            $post->witer = $this->users->find($post->writer) !== null
                ? $this->users->find($post->writer)->full_name
                : 'admin';
        }

        $data = ['feature' => $feature, 'posts' => $posts];
        return view('web.home', compact('data'));
    }
}
