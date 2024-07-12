<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function index()
    {
        $feature = Post::orderBy('updated_at','desc')->take(4)->get();
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(Config::get('panelconfig.paginate.home'));
        $data = ['feature' => $feature, 'posts' => $posts];
        return view('web.home', compact('data'));
    }
}
