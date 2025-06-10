@extends('layouts.home')
@section('description', 'Web Portfolio for web developer from the greater Minneapolis area using Laravel/PHP, JavaScript, React.js, Ruby on Rails, Umbraco, Wordpress, and CSS.')
@section('title', 'Brian Wardwell: Web Developer')
@section('content')
    <div class="home-pad">
        <h1>Brian Wardwell &#10072; Web Developer and Software Developer</h1>
            <div class="home-container">
                <blockquote class="home-notice">
                    <button type="button" class="btn btn-primary my-blue-btn"><a href="{{ route('background') }}" title="Background">Background</a></button>
                    <button type="button" class="btn btn-primary my-blue-btn"><a href="{{ route('experience') }}" title="Professional Experience">Experience</a></button>
                    <button type="button" class="btn btn-primary my-blue-btn"><a href="{{ route('skills') }}" title="Skills List">Skills List</a></button>
                    <p class="uppercase-shadow mid-size-font">Today is: {{$today}}</caption>
                    <p>
                        Hello, welcome to my web portfolio. Please be aware that you are currently viewing an version of the site that is older in respect to visual design and was developed with an earlier iteration of Laravel. I am actively engaged in an exciting redesign and development process, crafting a brand-new portfolio as a dynamic single-page application using Next.js, Tailwind CSS, and the animation capabilities of Framer Motion. Prepare for an enhanced and engaging showcase of my work – stay tuned for the unveiling.
                    </p>
                </blockquote>
                <img src="/images/site-images/sublime-code.png">
            </div>
            <div id="right-home">
        </div>
    </div>
@stop