@extends('layouts.admin')
@section('title', 'Show')
@section('content')
    <div class="static-content about">
        <p class="h4">Admin Center &#9654; Posts</p>
        <table class="post-table col-100">
            <thead>
                <th>id</th>
                <th>title</th>
                <th>description</th>
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
                        <td>{{ $post->created_at }}</td>
                        <td><a class="post-btn" href="{{ $post->id}}">View Post</a></td>
                        <td><a class="post-btn" href="{{ URL::to('/admin') }}/{{ $post->id}}/edit">Edit Post</a></td>
                        <td>
                            <form class="pull-right" method="DELETE" action="{{ route('admin.delete', $post->id) }}">
                                <div class="btn">
                                    <input class="del-post-warn-btn" type="submit" value="Delete Post">
                                </div>
                            </form>
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