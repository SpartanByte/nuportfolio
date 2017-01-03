@extends('layouts.gallery')

    {{-- I am testing comments in Blade that should not be seen in inspect page --}}



@section('gallery')

<div id="gallery-thumbnails">
    <h1>Testing Title Header</h1>
        <img src="https://images.jacobinmag.com/2012/02/technology-innovation.png" width="300px" height="300px" />
        <img src="https://images.jacobinmag.com/2012/02/technology-innovation.png" width="300px" height="300px" />
        <img src="https://images.jacobinmag.com/2012/02/technology-innovation.png" width="300px" height="300px" />
        <img src="https://images.jacobinmag.com/2012/02/technology-innovation.png" width="300px" height="300px" />
        <img src="https://images.jacobinmag.com/2012/02/technology-innovation.png" width="300px" height="300px" />
        <img src="https://images.jacobinmag.com/2012/02/technology-innovation.png" width="300px" height="300px" />
        <img src="https://images.jacobinmag.com/2012/02/technology-innovation.png" width="300px" height="300px" />
        <img src=" {{ url('/uploads/24791.jpg') }} " width="300px" height="300px" />
    </div>





@stop