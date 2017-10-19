<meta charset="utf-8">
<meta name="author" content="Brian Wardwell">
<meta name="description" content="@yield('description')">

{{-- <title>Brian Wardwell - @yield('title')</title> --}}
<title>@yield('title')</title>
{{-- Favicon --}}
<link rel="icon" type="image/png" href="/images/icons/bw-favicon.png" />
<link rel="icon" href="/images/icons/bw-favicon.png" type="image/png" />

{{-- CSS --}}
<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/proza-libre-webkit/stylesheet.css') }}" />

{{-- CDN's --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>{{-- jQuery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>{{-- CDN for Vue.JS --}}
{{-- Loading Bootstrap from CDN --}} 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
{{-- <script src="https://unpkg.com/vue"></script> --}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>