 @extends('layouts.default')

 @section('title', 'Slideshow')

 @section('content')
    <div class="static-content">


	<div id="gallery-thumbnails" style="padding-bottom:15px;">
    <h1 class="page-header">Slideshow</h1>
	<title>Javascript Slideshow</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
</head>
<body>
<div id="slideshow">
  <div class="picture">
    <img src="/images/slide/blue.jpg" alt="blue.jpg"><p>This color is blue.</p><br>
    
  </div>
  <div class="picture">
    <img src="/images/slide/red.jpg" alt="blue.jpg"><p>This color is red.</p>
  </div>
  <div class="picture">
    <img src="/images/slide/gold.jpg" alt="gold.jpg"><p>This color is gold</p>
  </div>
  <div class="picture">
	<img src="/images/slide/yellow.jpg" alt="yellow.jpg"><p>This color is yellow.</p>
	</div>
</div>
	
    <div id="gallery-clear-bottom"><button type="button" class="btn-primary btn-lg"><a href="#">Back To Home</a></button></div>
</div>
    


@stop


