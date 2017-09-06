@extends('layouts.default')

@section('title', 'All Posts')

@section('content')
    <div class="static-content general-coding">

    {{-- This is the list of posts that the front end user will see --}}
     <span class="page-header uppercase-shadow mid-size-font">Brian Wardwell's Posts</span>
     <hr />

    @foreach($posts as $post)
              <h2><a class="internal-link" href="{{ route('posts.show', ['post'=>$post->id]) }} "><span class="section-header mid-size-font">{{ $post->title }}</span></a></h2>
              <p>Submitted on: {{ $post->created_at->format('m/d/Y') }}</p>
              <div class="post-description">
                    <blockquote>{{$post->descriptions}} ||| <a href="{{ route('posts.show', ['post' => $post->id]) }}">View Post</a></blockquote>
            </div>
      @endforeach

        <hr />
       <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>
  </div>
@endsection