@extends('layouts.default')

@section('title', 'Show')

@section('content')
    <div class="static-content about">
  <h1>Posts</h1>

  <br>
  <br>
  <br>
  
  <table class="table">
    <thead>
      <th>id</th>
      <th>title</th>
      <th>description</th>
      <th>body</th>
      <th>view</th>
    </thead>
    
    <tbody>
     @foreach($posts as $post)
        <tr>
          <th>{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->descriptions }}</td>
          <td>{{ $post->body }}</td>
          <td class="primary-btn post-btn"><a href="/posts/ {{ $post->id}}">View</a></td>{{-- Will update to method after method is built --}}
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection