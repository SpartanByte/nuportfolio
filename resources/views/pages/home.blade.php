@extends('layouts.default')

@section('title', 'Home')

@section('content')

    <p>test paragraph</p>






        <div class="landing-image">
            <img src="/images/stock/laptop_time.jpg" />
        </div>

        <div id="right-home">
                <section>
                    <h1>Brian Wardwell</h1>
                    <h2>Web Developer | Musician | Amateur Photographer | Writer</h2>
                    <h3>Web Development focusing on innovation, aesthetics, user experience and custom functionality</h3>
                    <p>Sole musician in musical project, <a href="#">Battle Cry</a> (Recorded from 1997-2012) | Vocals, Guitar, Bass, Keyboards <br />
                    Sole administrator and writer for entertainment website, <a href="#">MusicBytes</a> (launched in January 2015) <br />
                    Also an amateur photographer and graphics manipulator</p>
                    <p><img src="/images/stock/code-screen.jpg" /></p>
                </section>
        </div>
        <div id="social-corner">
            <script>
                image01 = new Image()
                image01.src ="http://placehold.it/100x100"
                image02 = new Image()
                image02.src="https://dummyimage.com/100x100/000/fff"
            </script>
                {{-- This idea could be used for the new social media icons (or stick with the animation on the current site?) 
                <a href="{{ url('pages.about') }}" onmouseover="document.images['example'].src=image02.src" onmouseout="document.images['example'].src=image01.src">
                <img src="http://placehold.it/100x50" name="example"> </a>--}}
            </div>
@stop