
<html>
	<head>
		<style>
			.email-format{
				background-color:#083450;
				color:white;
				height:auto;
				padding:10px 10px 10px 10px;
				width: 50%;
			}
		</style>

	</head>
	<body>
	<div class="email-format">
		<h2>Laravel successefully sent an email!</h2>
			<p>Name: {{ $name }}<br />
			<p>Email: {{ $email }}<br />
			<p>Message: {{ $user_message }}</p>
			<p><a style="color:white;" href="https://laravel.com/"><img src="http://laraveldaily.com/wp-content/uploads/2015/06/laravel-logo-big.png" 
				width=300 height=200 /><br />Laravel is the best!</a></p>

	</div>
</body>
</html>




