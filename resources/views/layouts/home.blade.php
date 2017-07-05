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

    <div id="" class="">



        <!-- main content -->
        <div id="content" class="col-md-8 home-pad">
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