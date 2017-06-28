    @extends('layouts.default')

@section('title', $post->title)

@section('content')
    <div class="static-content">
  
  	<h2 class="h3">Showing Post: <strong>{{ $post->title }}</strong></h2>

    	<p class="h4">Showing the result of posts.show</p>

    	<div class="post-content">
		<p>Post ID: <strong>{{ $post-> id }}</strong></p>
		<p>Title:  <strong>{{ $post-> title }}</strong></p>
		<p>Body: <strong>{{ $post-> body }}</strong>.</p>
	</div>
@endsection