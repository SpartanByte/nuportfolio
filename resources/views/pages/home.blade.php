@extends('layouts.home')
@section('description', 'Web Portfolio for web developer from the greater Minneapolis area using Laravel/PHP, JavaScript, React.js, Ruby on Rails, Umbraco, Wordpress, and CSS.')
@section('title', 'Brian Wardwell: Web Developer')
@section('content')
    <div class="home-pad">
        <h1>Brian Wardwell &#10072; Web Developer and Software Developer</h1>
            <div class="home-container">
                <blockquote class="home-notice">
                    <button type="button" class="btn btn-primary my-blue-btn">
                        <a href="http://developer.brianwardwell.com" title="NextJS Web Developer Portfolio">Visit my NEW Portfolio</a>
                    </button>
                    <p>Note: I will be updating redirection once the SSL certificate is installed on the new site.</p>
                </blockquote>
                <blockquote class="home-notice">
                    <button type="button" class="btn btn-primary my-blue-btn"><a href="{{ route('background') }}" title="Background">Background</a></button>
                    <button type="button" class="btn btn-primary my-blue-btn"><a href="{{ route('experience') }}" title="Professional Experience">Experience</a></button>
                    <button type="button" class="btn btn-primary my-blue-btn"><a href="{{ route('skills') }}" title="Skills List">Skills List</a></button>
                    <p class="uppercase-shadow mid-size-font">Today is: {{$today}}</caption>
                </blockquote>
                <img src="/images/site-images/sublime-code.png">
            </div>
            <div id="right-home">
        </div>
    </div>
@stop