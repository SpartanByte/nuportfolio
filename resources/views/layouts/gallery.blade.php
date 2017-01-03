<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">

    <!-- Gallery Grid System -->
    <div id="gallery-columns" class=".col-md-4">
        @yield('gallery')
    </div>

    </div>

    <!-- footer content -->
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>