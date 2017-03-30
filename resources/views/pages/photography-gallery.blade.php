@extends('layouts.default')

@section('title', 'Photography')

@section('content')
<div class="static-content">
    <div id="gallery-thumbnails" style="padding-bottom:15px;">
        <h1 class="page-header gallery-header">Photography</h1>
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
                {{--<li><img src="/images/photograhy/san-francisco-face-400-300.png" /></li>--}}
            </ul>
    </div>
    <div id="gallery-clear-bottom"></div>
</div>
@stop