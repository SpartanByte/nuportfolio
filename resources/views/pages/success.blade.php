

 @extends('layouts.default')

    @section('title', 'General Information')

    @section('content')
    <div class="static-content general-coding">

        <span class="section-header mid-size-font">Upload Successful!<br />
        <span class="uppercase-shadow">{{ $fileName }} was uploaded!</span></span>
        <hr />
        <p><a class="internal-link mid-size-font" href="/">Back To Homepage</a></p>

    <div class="bottom-spacer"></div>
@stop