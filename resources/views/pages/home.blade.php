@extends('layouts.home')
@section('description', 'Web Developer from Fargo, ND. He is also a musician and working on projects Battle Cry and LaconicAura, amateur photographer and writer.')
@section('title', 'Brian Wardwell: Web Developer')

@section('content')
    <div class="home-pad">

        <h1>Brian Wardwell</h1>
        <h2>Web Developer | Musician | Amateur Photographer | Writer</h2>
        {{--<p><img src="/images/stock/code-screen.jpg" class=""/></p>--}}
        <img src="/images/stock/laptop_time.jpg" class="" />
        <h3>Web Development focusing on innovation, aesthetics, user experience and custom functionality</h3>
        <p>Sole musician in musical project, <a href="https://soundcloud.com/battle-cry-wardwell" target="_blank">Battle Cry</a> (Recorded from 1997-2012) | Vocals, Guitar, Bass, Keyboards <br />
            Sole administrator and writer for entertainment website, <a href="http://musicbytes.us/" target="_blank">MusicBytes</a> (launched in January 2015) <br />
            Also an amateur photographer and graphics manipulator</p>

        <div class="landing-image">
            {{--<img src="/images/stock/code-screen.jpg" class=""/>--}}
        </div>
        <div id="right-home">
                <section>
                    <img src="/images/stock/code-screen.jpg" class="img-100"/>
                    {{--<h1>Brian Wardwell</h1>--}}
                    {{--<h2>Web Developer | Musician | Amateur Photographer | Writer</h2>--}}
                    {{--<p><img src="/images/stock/code-screen.jpg" class="img-100"/></p>--}}
                    {{--<h3>Web Development focusing on innovation, aesthetics, user experience and custom functionality</h3>--}}
                    {{--<p>Sole musician in musical project, <a href="https://soundcloud.com/battle-cry-wardwell" target="_blank">Battle Cry</a> (Recorded from 1997-2012) | Vocals, Guitar, Bass, Keyboards <br />--}}
                    {{--Sole administrator and writer for entertainment website, <a href="http://musicbytes.us/" target="_blank">MusicBytes</a> (launched in January 2015) <br />--}}
                    {{--Also an amateur photographer and graphics manipulator</p>--}}
                    {{--<p><img src="/images/stock/code-screen.jpg" class="img-100"/></p>--}}
                </section>
        </div>
</div>
{{--         <div id="social-corner">
            <script>
                image01 = new Image()
                image01.src ="http://placehold.it/100x100"
                image02 = new Image()
                image02.src="https://dummyimage.com/100x100/000/fff"
            </script>
        </div> --}}
@stop