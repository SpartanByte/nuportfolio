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

        // indexing/listing posts
        public function index()
        {
            $posts = Post::all();
            return view ('admin.index')->with('posts', $posts);
        }

                // indexing/listing posts
        public function home()
        {
            $posts = Post::all();
            return view ('admin/home')->with('posts', $posts);
        }

        // serving create form for new post
        public function create()
        {
            // creating a blog post
            return view('admin.create');
        }

        // saving new post to database
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
            // saving input to new post record
            $post->save();

           return redirect()->route('admin.index');
           //return view('admin.index');
        }

        // showing individual post (View Post)
        public function show($id)
        {
            $post = Post::find($id);
            // return view('admin.show')->with('post', $post);
             return view('admin.show')->with(compact('post'));

        }


        // Still working on this function for public view 
        public function showPost($id)
        {
            // shows individual post
            $post = Post::find($id);
            // return view('admin.show')->with('post', $post); 
            return view('admin.show')->with(compact('post'));
        }

       // editing post 
        public function edit($id)
        {
            // editing selected post
            $post = Post::find($id);
            // show edit form and pass data to form
            // return View::make('admin.edit')->with('post', $post);
            return view('admin.edit')->with(compact('post'));
        }

        // updating post in database from edit post form
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
            // Session::flash('message', 'Successfully updated post!');
            // return Redirect::to('admin');
            return redirect()->route('admin');
        }

        // Deleting post from database
        public function destroy($id)
        {
            // delete post
            $post = Post::find($id);
            $post->delete();
            
            return redirect()->route('admin');
        }
}
