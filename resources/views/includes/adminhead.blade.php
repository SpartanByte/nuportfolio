
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BrianWardwell') }}</title>

    <link href="/css/app.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/admin-style.css') }}" />
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
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
