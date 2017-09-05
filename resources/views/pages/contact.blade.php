@extends('layouts.default')
@section('description', 'Contact Brian Wardwell for more information on web development, web design, user interface design, and more')
@section('title', 'Contact')

    {{-- I am testing comments in Blade that should not be seen in inspect page --}}

@section('content')
<div class="static-content">
    <h2>Contact Us!</h2>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

        <div class="form-group" style="height:auto;">
            {!! Form::label('Your Name: ') !!}
            {!! Form::text('name', null,
                    array('required',
                            'class' => 'form-control',
                            'placeholder' => 'Your Name')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your E-mail Address') !!}
            {!! Form::text('email', null, 
                    array('required', 
                            'class' => 'form-control', 
                            'placeholder' => 'Your e-mail address')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Your Message: | Note: No HTML is accepted in this form') !!}
            {!! Form::textarea('message', null,
                    array('required', 
                            'class' => 'form-control',
                            'placeholder' => 'Your message')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Send Email',
                    array('class' => 'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
</div>
@stop