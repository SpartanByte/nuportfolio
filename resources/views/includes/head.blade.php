<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="NuWebsite">
	

<title>NuWebsite | @yield('title')</title>

<!-- resetting css -->
<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="icon" type="image/png" href="/images/icons/bw-favicon.png" />
<link rel="icon" href="/images/icons/bw-favicon.png" type="image/png" />

{{-- CDN for jQuery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{-- CDN for Vue.JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>

{{-- CDN for files needed to integrate jQuery Mobile for RWD and Mobile design --}}
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<!-- loading boostrap from CDN -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="{{ URL::asset('js/slideshow.js') }}" /></script>
