@extends('layouts.default')
@section('title', $post['title'])
@section('content')
<div class="static-content general-coding">
    <h1>Posts</h1>
    <div class="post-title">
    <span class="page-header uppercase-shadow post-title"><span style="font-size:3rem;">&#x2615;</span> {{ $post->title }}</span><br />
    <span class="uppercase-shadow post-date">Date: {{ date('F d, Y', strtotime($post->created_at)) }} </span>
    <div class="post-body">{!! $post->body !!}</div>
        <span><a class="btn btn-small btn-success post-btn" style="color:#fff;" href="{{ URL::to('/posts') }}">Return to Posts</a></span>
        <span><a class="btn btn-small btn-success post-btn" style="color:#fff;" href="{{ URL::to('/') }}">Return to Home</a></span>
    </div>
</div>
@endsection