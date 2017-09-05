@extends('layouts.default')
@section('description', 'Contact Brian Wardwell for more information on web development, web design, user interface design, and more')
@section('title', 'Contact')

    {{-- I am testing comments in Blade that should not be seen in inspect page --}}

@section('content')
<div class="static-content">
    <span class="page-header uppercase-shadow mid-size-font">Thank you for your message!</span><br />
    <p style="font-size:1.5rem;">{{ $confirmation }}</p>

    <div class="vert-btn-container">
        <ul>
                <li><a href="/">Return to Homepage</a></li>
                <li><a href="/pages/photoshop">Galleries Home</a></li>
                <li><a href="/coding/general">Visit Coding Home</a></li>
                <li><a href="/posts">View Posts</a></li>
                <li><a href="/pages/about">About Page</a></li>
        </ul>
    </div>

</div>
@stop