@extends('layouts.home')
@section('description', 'Web Portfolio for web developer from Fargo, ND using Laravel/PHP, JavaScript, Umbraco, Wordpress, and CSS.')
@section('title', 'Brian Wardwell: Web Developer')
@section('content')
    <div class="home-pad">
        <h1>Brian Wardwell &#10072; Web Developer/Software Engineer</h1>
            <div class="home-container">
                <img src="/images/site-images/sublime-code.png">
                <p class="uppercase-shadow mid-size-font">Today is: {{$today}}</caption>
                <h2>Versatile web and software developer with 7+ years of professional experience, musician, amateur photographer, dog owner, and lover of Minnesota's state parks.</h2>
                <blockquote>
                    <p>
                        Hello, welcome to my web portfolio. Please be aware that you are currently viewing an version of the site that is older in respect to visual design and was developed with an earlier iteration of Laravel. I am actively engaged in an exciting redesign and development process, crafting a brand-new portfolio as a dynamic single-page application using Next.js, Tailwind CSS, and the animation capabilities of Framer Motion. Prepare for an enhanced and engaging showcase of my work – stay tuned for the unveiling.
                    </p>
                </blockquote>
                <button type="button" class="btn btn-primary my-blue-btn"><a href="http://portfolio.brianwardwell.com/pages/experience" title="Professional Experience">Professional Experience</button>
            </div>
            <div id="right-home">
        </div>
    </div>
@stop