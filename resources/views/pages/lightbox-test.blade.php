
@extends('layouts.default')
@section('content')
<div class="container">
  <h2>Photoshop</h2>
    @foreach($imageFiles as $imageFile)
        <a data-toggle="lightbox" href="#demoLightbox{{$idReference += 1}}">
            <img src="/{{ $imageFile }}" width="400" height="300">
        </a>
        <div id="demoLightbox{{$idReference}}" class="lightbox fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class='lightbox-dialog'>
                <div class='lightbox-content'>
                    <img src="images/photoshop/{{$imageFile->getFilename()}}">
                    <div class='lightbox-caption'>
                        Write here your caption here
                    </div>
                </div>
            </div>
      </div>
    @endforeach
@stop