@extends('layouts.admin')
@section('title', 'Add New Blog Post')
@section('content')
  <h1>Add New Blog Post</h1>
  <div class="col-sm-8 col-sm-offset-2">
        {!! Form::open(array('route' => 'admin.store', 'class' => 'form')) !!}

        <div class="form-group" style="height:auto;">
            {!! Form::label('Author: ') !!}
            {!! Form::text('author', null,
                  array('required',
                        'class' =>'form-control',
                        'placeholder' => 'Your Name')) !!}
            </div>

              <div class="form-group" style="height:auto;">
            {!! Form::label('Post Title: ') !!}
            {!! Form::text('title', null,
                    array('required',
                            'class' => 'form-control',
                            'placeholder' => 'Enter Post Title')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Description of Post: ') !!}
            {!! Form::text('descriptions', null,
                    array('required',
                            'class' => 'form-control',
                            'placeholder' => 'Enter Description')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Body: ') !!}
            {!! Form::textarea('body', null,
                    array('required',
                            'class' => 'form-control',
                            'placeholder' => 'Start Typing Here')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Post',
                    array('class' => 'btn btn-small btn-success post-btn')) !!}
        </div>
        {!! Form::close() !!}
</div>

@endsection