@extends('layouts.default')

@section('title', 'All Posts')

@section('content')
    <div class="static-content general-coding">

    {{-- This is the list of posts that the front end user will see --}}
     <span class="page-header uppercase-shadow mid-size-font">Brian Wardwell's Posts</span>
     <hr />

  @foreach($posts as $post)
      <h2><a class="internal-link" href="{{ $post->id }}"><span class="section-header mid-size-font">{{ $post->title }}</span></a></h2>
              <p>{{ $post->body }}. <a class="internal-link" href="/posts/{{$post->id}}">Read More</a></p>
  @endforeach

  <hr />
    <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>
</div>
@endsection