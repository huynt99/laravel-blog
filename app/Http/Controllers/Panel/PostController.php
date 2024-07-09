<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PhpParser\Node\Stmt\If_;

class PostController extends Controller
{
    use UploadImage;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->paginate(Config::get('panelconfig.paginate.post'));
        return view('panel.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('panel.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $postRequest)
    {
        $data = $postRequest->all();
        if ($postRequest->has('image'))
            $data['image'] = $this->uploadImage($data['image'] , 'post_image');
        $data['writer'] = auth()->id();
        Post::create($data);

        return redirect()->back()->with('success', 'Create post ' . $data['title'] . ' successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $data = [
            'categories' => Category::all(),
            'post' => $post
        ];
        return view('panel.post.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $postRequest, Post $post)
    {
        $requestData = $postRequest->all();
        if ($postRequest->has('image'))
            $requestData['image'] = $this->updateImage($requestData['image'], 'post_image', $post->image);

        $post->update($requestData);
        return redirect()->back()->with('success', 'Update post ' . $requestData['title'] . ' successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return redirect()->back()->with('success', 'Delete post successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->with('error', 'Can not delete this post');
        }
    }
}
