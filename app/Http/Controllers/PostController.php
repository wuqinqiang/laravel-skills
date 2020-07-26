<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::allPost();
        return view('Post.index', compact('posts'));
    }
}
