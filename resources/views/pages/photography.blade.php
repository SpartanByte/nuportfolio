@extends('layouts.default')
@section('description', 'Brian Wardwell amateur photography: portraits, landscapes, macro. some from my profile as x-ample on deviantart.com')
@section('title', 'Photography')

@section('content')
<div class="static-content gallery">
    <div id="gallery-thumbnails" style="padding-bottom:15px;">

        <span class="page-header uppercase-shadow gallery-header">Photography</span>
            <ul class="photo-list">


                {{-- Images generated from ImageController@showPhotography --}}
                @foreach($imageFiles as $imageFile)
                    <li><a href="/{{ $imageFile }}" title="View Full Size" style="width:100%;height:100%;"><img src="/{{ $imageFile }}" width="400" height="300" /></a></li>
                @endforeach

         </div>
    <div id="gallery-clear-bottom"></div>
</div>
@stop