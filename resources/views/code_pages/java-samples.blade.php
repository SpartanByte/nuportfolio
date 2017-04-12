    @extends('layouts.default')

    @section('title', 'PHP Examples')

    @section('content')
    <div class="static-content" id="code-content">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
       {{--  <h1 class="page-header">Java Code Samples</h1> --}}
        <hr />

        <img src="/images/logos/java.jpg" />
        <h1>Java Code Samples</h1>
            <p><a href="#">Choose An Applet You Made And Liked</a></p>
            <p><a href="#">Java Example 2</a></p>
            <p><a href="#">Java Example 3</a></p>
            {{-- additional projects will continue like this. -- will be easy to advance into a model returning a request for files related to PHP samples --}}

        <hr />

   
    </div>
@stop