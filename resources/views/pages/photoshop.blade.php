@extends('layouts.default')
@section('description', 'Brian Wardwell photoshop prototypes and composites: music related, advertising, website mockups. some from my profile as x-ample on deviantart.com')
@section('title', 'Photoshop Composites')

@section('content')
<div class="static-content gallery">
    <div id="gallery-thumbnails" style="padding-bottom:15px;">

        <span class="page-header uppercase-shadow gallery-header lightSpeedIn">Photoshop Gallery</span>
        <ul class="photo-list">
        <div class="gallery-description">
        <p>I was first introduced to and started using <a href="http://www.adobe.com/products/photoshop.html" title="Adobe Products: Photoshop" target="_blank">Photoshop</a> in 2005, using Photoshop 7. Version 9 had been released in 2005, though it was more difficult to afford then. Having a very new interest in taking amateur photography and editing further, I instantly loved it despite it's fairly steep learning curve for beginners. Moving being just photo-editing, I began doing full digital photomanipulations/composites as well, usually themed with a musician or song. I still continue to do fun, personal composites when time allows.</p>
        </div>
       {{--      <ul class="photo-list"> --}}
                {{-- Images generated from ImageController@showPhotography --}}
                @foreach($imageFiles as $imageFile)
                    <li><a href="/{{ $imageFile }}" title="View Full Size" style="width:100%;height:100%;"><img src="/{{ $imageFile }}" width="400" height="300" /></a></li>
                @endforeach
            </ul>
    </div>
    <div id="gallery-clear-bottom"></div>
</div>
@stop