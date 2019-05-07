<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.post');
    }
    public function store(Request $request)
    {
        $post = new \App\Models\Post;
        $post->title=$request->get('title');
        $post->body=$request->get('body');

        $post->save();
        return redirect('posts');
    }
    public function index()
    {
        $posts = \App\Models\Post::all();
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        $post = \App\Models\Post::find($id);
        return view('posts.show', compact('post'));
    }
}
