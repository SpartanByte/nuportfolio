@extends('layouts.default')
@section('title', 'All Posts')
@section('content')

<div class="static-content general-coding" style="min-height: 545px;">
    <span class="page-header uppercase-shadow mid-size-font">Brian Wardwell's Posts</span><hr />
    @if(count($posts) == 0)
        <h5>Update (07/24/2018):</h4>
        <h4>I've finished building a blog engine from scratch built on Laravel MVC. I'll be adding a couple of posts shortly.</h4>
        <img src="/images/site-images/sublime-code.png" style="width:50%;">
    @endif
    @foreach($posts as $post)
        <h2><a class="internal-link" href="{{ route('posts.show', ['post'=>$post->id]) }} "><span class="section-header mid-size-font">{{ $post->title }}</span></a></h2>
        <p>Submitted on: {{ $post->created_at->format('m/d/Y') }}</p>
        <div class="post-description">
            <blockquote>{{$post->descriptions}} ||| <a href="{{ route('posts.show', ['post' => $post->id]) }}">View Post</a></blockquote>
        </div>
    @endforeach
    <hr />
    <span><a class="btn btn-primary contact" style="color:#fff;" href="/">Return to Home</a></span>
</div>
@endsection