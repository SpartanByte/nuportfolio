@extends('layouts.default')

@section('title', 'All Posts')

@section('content')
    <div class="static-content about">

    {{-- This is the list of posts that the front end user will see --}}
    <h1>Brian Wardwell's Posts</h1>

  @foreach($posts as $post)
      <h2><a class="internal-link" href="{{ $post->id}}"><span class="page-header mid-size-font">{{ $post->title }}</span></a></h2>
              <p style="font-size: 14px;">{{$post->body}}. <a class="internal-link" href="/posts/{{$post->id}}">Read More</a></p>
  @endforeach


    <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>
</div>
@endsection