<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header class="row" style="position:relative;">
        @include('includes.header')
    </header>
    <div id="" class="">
        <!-- main content -->
        {{-- <div id="content" class="col-md-8 home-pad"> --}}
        <div id="content" class="home-pad">
            @yield('content')
        </div>
    </div>

    <!-- footer content -->
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>