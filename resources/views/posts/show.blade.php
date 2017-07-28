@extends('layouts.default')

@section('title', $post['title'])

@section('content')
    <div class="static-content general-coding">
{{--   <h1>{{$post->title}}</h1> --}}
  <span class="page-header uppercase-shadow mid-size-font">{{ $post->title }}</span>


<hr />
{{--   <p>Test: {{ $post->title}}</p> --}}

<h1>This is show.blade.php</h1>
  <span class="page-header uppercase-shadow mid-size-font">Title: {{ $post->title }}</span>
  <p>{!! $post->body !!}</p>

  <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/posts') }}">Return to Posts</a></span>
    <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>

</div>
@endsection