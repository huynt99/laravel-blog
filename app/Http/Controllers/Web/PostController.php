<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    /**
     * Show new post
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->first();
        $data = [
            'post' => $post,
            'categories' => Category::where('parent_id', 0)->get()
        ];
        return view('web.post', compact('data'));
    }

    /**
     * Show specified post
     * @param Post $post
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(Post $post)
    {
        $data = [
            'post' => $post,
            'categories' => Category::where('parent_id', 0)->get()
        ];
        return view('web.post', compact('data'));
    }
}
