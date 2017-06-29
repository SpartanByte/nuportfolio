<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::all();

        return view ('posts.index')->with(['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // creating a blog post
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // stores post submission
        $post = new Post;

        $postTitle = $request->title;
        $postBody = $request->body;
        $postDescription = $request->descriptions;
        $postAuthor = $request->author;

        $post->title = $postTitle;
        $post->body = $postBody;
        $post->descriptions = $postDescription;
        $post->author = $postAuthor;

        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }



    public function showPost($id)
    {
        // shows individual post
        $post = Post::find($id);
        return view('posts.show')->with('post', $post); 
    }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            // editing selected post
            $post = Post::find($id);
            // show edit form and pass data to form
            return View::make('posts.edit')->with('post', $post);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            // updating the post with the edit form
            $post = Post::find($id);

            $post->title  = Input::get('title');
            $post->author = Input::get('author');
            $post->descriptions = Input::get('descriptions');
            $post->body = Input::get('body');
            $post->save();

            // redirect
            Session::flash('message', 'Successfully updated post!');
            return Redirect::to('posts');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            // delete post
            $post = Post::find($id);
            $post->delete();
            
            Session::flash('message', 'Successfully deleted!');
            return Redirect::to('posts');
        }
}
