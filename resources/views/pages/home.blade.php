@extends('layouts.home')
@section('description', 'Web Developer from Fargo, ND. He is also a musician and working on projects Battle Cry and LaconicAura, amateur photographer and writer.')
@section('title', 'Brian Wardwell: Web Developer')
@section('content')
    <div class="home-pad">
        <h1>Brian Wardwell</h1>
        <h2>Web Developer | Musician | Amateur Photographer | Writer</h2>
            <div class="left-home">
                <img src="/images/stock/laptop_time.jpg" class="img-50" />
                <h3>Web Development focusing on innovation, aesthetics, user experience and custom functionality</h3>
                <p>Sole musician in musical project, <a href="https://soundcloud.com/battle-cry-wardwell" target="_blank">Battle Cry</a> (Recorded from 1997-2012) | Vocals, Guitar, Bass, Keyboards <br />
                    Sole administrator and writer for entertainment website,
                    <a href="http://musicbytes.us/" target="_blank">MusicBytes</a> (launched in January 2015) <br />
                    Also an amateur photographer and graphics manipulator
                </p>
                <div class="landing-image"></div>
            </div>
            <div id="right-home">
            <section>
                <img src="/images/stock/php-screen.jpg" class="img-100"/><br />
                <caption>Today is: {{$today}}</caption>
            </section>
        </div>
    </div>
@stop