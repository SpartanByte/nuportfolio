@extends('layouts.admin')
@section('title', $post->title)
@section('content')
    <div class="post-form-container">
        <p class="h4">Admin Center &#9654; Editing Post: {{$post->title}}</p>
        <form class="post-form" method="POST" action="{{route('admin.update', $post->id)}}">
            {{ csrf_field() }}
            <div class="input-group">
                <label for="author">Author:
                    <input name="author" type="text" class="text-input" placeholder="{{ $post->author }}" value="{{$post->author}}"/>
                </label>
            </div>
            <div class="input-group">
                <label for="title">Title:
                    <input name="title" type="text" class="text-input" placeholder="{{ $post->title }}" value="{{$post->title}}" />
                </label>
            </div>
            <div class="input-group">
                <label for="descriptions">Description: </label>
                <input name="descriptions" type="text" class="text-input" placeholder="{{$post->descriptions}}" value="{{$post->descriptions}}" />
            </div>
            <div class="input-group">
                <label for="body">Body:<br />
                    <textarea name="body" class="body-input" name="body" rows="20" placeholder="{{$post->body}}" value="{{$post->body}}"></textarea>
                </label>
            </div>
            <div class="form-btn-group">
                <input type="submit" class="btn btn-small btn-success post-btn" value="Update Post" />
            </div>
    </form>
</div>
@endsection