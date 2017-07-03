@extends('layouts.default')

@section('title', 'Show')

@section('content')
    <div class="static-content about">
  <h1>{{$post->title}}</h1>
  <p class="h4">This is a very general and basic blog.</p>

  <p>Test: {{ $post->title}}</p>
  <p>{!! $post->body !!}</p>

  <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/posts') }}">Return to Posts</a></span>
    <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>
</div>
@endsection