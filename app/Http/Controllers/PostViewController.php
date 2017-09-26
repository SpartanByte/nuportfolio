<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class PostViewController extends Controller
{
    // Show list of posts with brief descriptions for users
    public function index()
    {        
        $posts = Post::all();
        return view('posts.index')->with(compact('posts'));
    }

    // Show individual post
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with(compact('post'));
    }
}
