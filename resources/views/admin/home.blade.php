@extends('layouts.admin')

@section('title', 'Show')

@section('content')
    <div class="static-content about">
  <h1>Posts</h1>
  <p class="h4">This is a very general and basic blog.</p>
  
  <table class="post-table col-100">
    <thead>
      <th>id</th>
      <th>title</th>
      <th>descriptions</th>
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
          {{-- <td class="post-body">{{ $post->body }}</td> --}}
          <td>{{ $post->created_at }}</td>
          <td><a class="btn btn-small btn-success post-btn" href="{{ $post->id}}">View Post</a></td>{{-- Will update to method after method is built --}}
          <td><a  class="btn btn-small btn-success post-btn" href="{{ URL::to('/admin') }}/{{ $post->id}}/edit">Edit Post</a></td>
          <td>
                  {{-- Delete Post Form --}}
                  {!! Form::open(array('url' => 'admin/ '. $post->id, 'class' => 'pull-right' )) !!}
                      {!! Form::hidden('_method', 'DELETE') !!}
                      {!! Form::submit('Delete Post', array('class' => 'btn del-post-warn-btn')) !!}
                  {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
    <span><a  class="btn btn-small btn-success post-btn" href="{{ route('admin.create') }}">Add Post</a></span>
    <span><a class="btn btn-small btn-success post-btn" href="{{ URL::to('/') }}">Return to Home</a></span>
    <div class="logout-div">
      <a href="{{ url('/logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
          </div>
</div>
@endsection