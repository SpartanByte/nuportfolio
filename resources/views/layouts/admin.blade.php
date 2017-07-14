<!doctype html>
<html>
<head>
    @include('includes.adminhead')
</head>
<body>
<div class="container">
    <header class="row">
        @include('includes.adminheader')
    </header>

        <!-- main content -->
        <div id="content" class="col-md-8">
            @yield('content')
        </div>
    </div>

    <!-- footer content -->
    <footer class="row">
        @include('includes.adminfooter')
    </footer>
</div>
</body>
</html>