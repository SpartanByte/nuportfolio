@extends('layouts.default')

@section('title', 'Show')

@section('content')
    <div class="static-content about">
  <h1>Posts</h1>
  <p class="h4">This is a very general and basic blog.</p>
  
  <table class="post-table col-100">
    <thead>
      <th>id</th>
      <th>title</th>
      <th>description</th>
      <th>body</th>
      <th>posted on</th>
      <th>view</th>
      <th>edit</th>
      <th>delete</th>
    </thead>
    <tbody>
     @foreach($posts as $post)
        <tr>
          <th>{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->descriptions }}</td>
          <td class="post-body">{{ $post->body }}</td>
          <td>{{ $post->created_at }}</td>
          <td><a class="btn btn-small btn-success post-btn" href="posts/{{ $post->id}}">View Post</a></td>{{-- Will update to method after method is built --}}
          <td><a  class="btn btn-small btn-success post-btn" href="{{ URL::to('/posts') }}/{{ $post->id}}/edit">Edit Post</a></td>
          <td>
                  {{-- Delete Post Form --}}
                  {!! Form::open(array('url' => 'posts/ '. $post->id, 'class' => 'pull-right' )) !!}
                      {!! Form::hidden('_method', 'DELETE') !!}
                      {!! Form::submit('Delete Post', array('class' => 'btn del-post-warn-btn')) !!}
                  {!! Form::close() !!}

          </td>
          {{-- <td><a  class="btn btn-small btn-success del-post-warn-btn" href="#">Delete Post</a></td> --}}
        </tr>
        @endforeach
    </tbody>
  </table>
    <span><a  class="btn btn-small btn-success post-btn" href="{{ route('posts.create') }}">Add Post</a></span>
    <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>
</div>
@endsection