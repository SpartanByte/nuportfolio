    @extends('layouts.default')
    @section('description', 'About Brian Wardwell: web developer, musician, amateur photographer, writer, native of Fargo North Dakota')
    @section('title', 'Page Not Found')

    @section('content')
        <div class="error-container">
            <h2 class="h2 error-header uppercase-shadow">&#9709; PAGE NOT FOUND &#9710;</h2><img src="images/svg/creepy-eye.svg" width="100" />
            <p>Here's the deal. We tried looking for the page that you requested, but to our heartbreak, we were unable to find it as it does not exist.</p>
            <h2 class="h2 error-link uppercase-shadow"><span class="pointer-arrow">&#10155; </span><a href="/">Return to the Homepage</a></h2>
        </div>
@stop