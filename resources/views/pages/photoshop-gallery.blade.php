@extends('layouts.default')

@section('title', 'Photoshop Composites')

@section('content')
<div class="static-content">
    <div id="gallery-thumbnails" style="padding-bottom:15px;">

        <span class="page-header uppercase-shadow gallery-header">Photoshop Gallery</span>
            <ul class="photo-list">
                <li><img src="/images/photoshop/above-and-beyond-mock-400-300.png" /></li>
                <li><img src="/images/photoshop/the-hjemkomst-center-handout-400-300.png" /></li>
                <li><img src="/images/photoshop/poppy-festival-handout-400-300.png" /></li>
                <li><img src="/images/photoshop/the-blvd-handout-400-300.png" /></li>
                <li><a href="/images/photoshop/full/the-skull-of-slayer-full.jpg">
                    <img src="/images/photoshop/thumbs/the-skull-of-slayer-thumb.jpg"></a></li>
                <li><img src="http://placehold.it/400x300" /></li>
                <li><img src="http://placehold.it/400x300" /></li>
            </ul>
    </div>
    <div id="gallery-clear-bottom"></div>
</div>
@stop