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
        // return view ('posts.index')->with(['posts'=>$posts]);
        // foreach($posts as $post){
        //     $postTimestamp = $post['created_at']->setTimezone('UTC');
        // }
        // $postDate = $posts['created_at']->date('dd-mm-YY');
        return view('posts.index')->with(compact('posts'));
        // return redirect()->route('posts')->with(compact('posts'));
    }

    // Show individual post
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with(compact('post'));
    }
}
