@extends('layouts.default')

@section('title', 'Photoshop Composites')

@section('content')
<div class="static-content">
    <div id="gallery-thumbnails" style="padding-bottom:15px;">

        <span class="page-header uppercase-shadow gallery-header">Photoshop Gallery</span>
            <ul class="photo-list">
                {{-- Images generated from ImageController@showPhotography --}}
                @foreach($imageFiles as $imageFile)
                    <li><a href="{{ $imageFile }}" title="View Full Size" style="width:100%;height:100%;"><img src="{{ $imageFile }}" width="400" height="300" /></a></li>
                @endforeach
            </ul>
    </div>
    <div id="gallery-clear-bottom"></div>
</div>
@stop