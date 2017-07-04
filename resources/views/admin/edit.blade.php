@extends('layouts.default')

@section('title', $post->title)

@section('content')
    <div class="static-content">
  
  	<h2 class="h3">Edit Post: <strong>{{ $post->title }}</strong></h2>

  	{!! Form::model($post, array('route' => array('admin.update', $post->id), 'method' => 'PUT')) !!}

  	<div class="form-group">
  		{!! Form::label('title', 'Title: ') !!}
  		{!! Form::text('title', null, array('class' => 'form-control'
  			, 'placeholder' => $post->title)) !!}
  	</div>

  	<div class="form-group">
  		{!! Form::label('author', 'Author: ') !!}
  		{!! Form::text('author', null, array('class' => 'form-control', 'placeholder' => $post->author)) !!}

  	</div>

  	<div class="form-group">
  		{!! Form::label('descriptions', 'Description: ') !!}
  		{!! Form::text('descriptions', null, array('class' => 'form-control', 'placeholder' => $post->descriptions)) !!}
  	</div>

  	<div class="form-group">
  		{!! Form::label('body', 'Body: ') !!}
  		{!! Form::text('body', null, array('class' => 'form-control', 'placeholder' => $post->body)) !!}
  	</div>

  	<div class="form-group">
            	{!! Form::submit('Update Post',
                    		array('class' => 'btn btn-small btn-success post-btn')) !!}
        	</div>
        
	{!! Form::close() !!}

@endsection