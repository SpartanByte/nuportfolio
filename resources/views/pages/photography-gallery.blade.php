@extends('layouts.default')

@section('title', 'Photography')

@section('content')
<div class="static-content">
    <div id="gallery-thumbnails" style="padding-bottom:15px;">

        <span class="page-header uppercase-shadow gallery-header">Photography</span>
            <ul class="photo-list">
                <li><img src="/images/photography/big-sur-400-300.png" /></li>
                <li><img src="/images/photography/golden-gate-400-300.png" /></li>
                <li><img src="/images/photography/falls-park-400-300.png" /></li>
                <li><img src="/images/photography/pelican-rapids-flower-400-300.png" /></li>
                <li><img src="/images/photography/bridget-400-300.png" /></li>
                <li><img src="/images/photography/abandoned-schoolhouse-400-300.png" /></li>
                <li><img src="/images/photography/self-portrait-400-300.png" /></li>
                <li><img src="/images/photography/lake-nacimiento-400-300.png" /></li>
                <li><img src="/images/photography/san-jose-400-300.png" /></li>
                <li><a href="/images/photography/full/general-avalon-full.jpg" title="Avalon Events Center, 2005">
                    <img src="/images/photography/thumbs/general-avalon-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/und-ralph-full.jpg" title="Ralph Engelstad Arena">
                        <img src="/images/photography/thumbs/und-ralph-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/hollywood-vampires-full.jpg" title="Hollywood Vampires, Fargo ND">
                    <img src="/images/photography/thumbs/hollywood-vampires-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/sevendust-rose-full.jpg" title="Morgan Rose of Sevendust">
                    <img src="/images/photography/thumbs/sevendust-rose-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/hallway-2005-full.jpg" title="Hallway Self Portrait">
                    <img src="/images/photography/thumbs/hallway-2005-thumb.jpg" /></a></li>
                <li><a href="/images/photography/full/izzy-stare-full.jpg">
                    <img src="/images/photography/thumbs/izzy-stare-thumb.jpg" /></a></li>
                {{--<li><img src="/images/photograhy/san-francisco-face-400-300.png" /></li>--}}
            </ul>
    </div>
    <div id="gallery-clear-bottom"></div>
</div>
@stop