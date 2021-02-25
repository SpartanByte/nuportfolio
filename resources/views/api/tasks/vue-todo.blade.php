@extends('layouts.default')
@section('description', 'more information on PHP and time and countdown examples')

@section('title', 'PHP > Time and Dates')

@section('content')
<div class="static-content general-coding">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }} '}
        </script>
        <div class="content" id='app'>
            <task-list></task-list>
        </div>


        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }} "></script>
  <div class="bottom-spacer"></div>
@stop

