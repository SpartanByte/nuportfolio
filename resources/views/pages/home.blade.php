@extends('layouts.default')

    {{-- I am testing comments in Blade that should not be seen in inspect page --}}

@section('content')
        {{--<div class="title-container">
                 <header class="page-title">Title of Site</header>
            </div> --}}

        <div class="landing-image">
            <img src="https://dummyimage.com/700x540/000/fff" />

        </div>

        <div id="right-home">
            <section>
            <h1>Brian Wardwell, Web Developer</h1>
            <p>Innovation With Focus on Aesthetics, User Experience and Functionality.</p>
            <p>I was born and raised in Fargo, ND and graduated in 2015 from Minnesota State Community and Technical College
                with an Associates of Applied Science in Web Development.</p>

                
                <p><img src="https://dummyimage.com/600x350/000/fff" /></p>
                {{--
                <img src="/images/icons/facebook.png" width="75" height="75" />
                <img src="/images/icons/linkedin.png" width="75" height="75" />
                <img src="/images/icons/twitter.png" width="75" height="75" />
                <img src="/images/icons/spotify.png" width="75" height="75" />
                --}}

            </section>

                </div>

            <div id="social-corner">
                

                <script>
                    image01 = new Image()
                    image01.src ="http://placehold.it/100x100"
                    image02 = new Image()
                    image02.src="https://dummyimage.com/100x100/000/fff"
                </script>
                {{-- This idea could be used for the new social media icons (or stick with the animation on the current site?) --}}
                <a href="{{ url('pages.about') }}" onmouseover="document.images['example'].src=image02.src" onmouseout="document.images['example'].src=image01.src">
                <img src="http://placehold.it/100x50" name="example"> </a>
            </div>

        
@stop