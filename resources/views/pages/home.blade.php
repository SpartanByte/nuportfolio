@extends('layouts.default')

    {{-- I am testing comments in Blade that should not be seen in inspect page --}}

@section('content')
    <div class="title-container">
    <header class="page-title">Title of Site</header>
    </div>

        <div class="landing-image">
            <img src="https://placeholdit.imgix.net/~text?txtsize=75&txt=800%C3%97640&w=800&h=640" />

        </div>

        <div class="right-home">
            <h1>Brian Wardwell, Web Developer</h1>
            <p>Innovation With Focus on Aesthetics, User Experience and Functionality.</p>
            <p>I was born and raised in Fargo, ND and graduated in 2015 from Minnesota State Community and Technical College
                with an Associates of Applied Science in Web Development.</p>

            <script>
                image01 = new Image()
                image01.src ="http://placehold.it/100x50"
                image02 = new Image()
                image02.src="https://dummyimage.com/100x50/000/fff"
            </script>
            {{-- This idea could be used for the new social media icons (or stick with the animation on the current site?) --}}
            <a href="{{ url('pages.about') }}" onmouseover="document.images['example'].src=image02.src" onmouseout="document.images['example'].src=image01.src">
            <img src="http://placehold.it/100x50" name="example"> </a>
    </div>
        
@stop