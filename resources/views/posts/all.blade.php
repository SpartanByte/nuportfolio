@extends('layouts.default')
@section('title', 'Show')
@section('content')

<div class="static-content about">
    <h1>Posts</h1>
    <p class="h4">This is a very general and basic blog.</p>
    @foreach($posts as $post)
        <h2><a class="internal-link" href="posts/{{ $post->id}}"><span class="page-header mid-size-font">{{ $post->title }}</span></a></h2>
        <p class="mid-size-font">{{$post->body}}. <a class="internal-link" href="posts-view/{{$post->id}}">Read More</a></p>
    @endforeach
    <span><a  class="btn btn-small btn-success post-btn" href="{{ route('posts.create') }}">Add Post</a></span>
    <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>
</div>
@endsection