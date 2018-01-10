<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\Tag;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $tags = Tag::all();
        $id = 1;
        $tags = Tag::where('id', $id)->first();


        // return route('tags.index')->with(compact('tags'));
        return route('tags.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tag = new Tag;

        $tag->tag = $request->tagTitle;
        $tag->save();

        // this might be better to add to creating Post, need to be able to add multiple tags
        $tagToPost = new Post;
        $tagToPost->tag = $tag->tag;
        $tagToPost->tag_id = $request->id;
        $tagToPost->save();

        $posts = Post::all();
        // return redirect()->route('admin.home')->with(compact('posts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('admin.home');
    }
}
