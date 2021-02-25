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
            <div id="gallery-main">
                <!-- Gallery Grid System -->
                <div id="gallery-columns" class=".col-md-4">
                    @yield('gallery')
                </div>
            </div>{{-- end of gallery-main --}}
            <footer class="row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>