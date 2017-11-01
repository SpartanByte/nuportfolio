<!doctype html>
<html>
<head>
    @include('includes.adminhead')
</head>
<body>
    <div class="container">
    @include('includes.adminheader')
        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>
        <!-- footer content -->
        <footer class="row">
            @include('includes.adminfooter')
        </footer>
    </div>
</body>
</html>