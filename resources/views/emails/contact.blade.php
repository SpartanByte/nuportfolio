
<html>
	<head>
		<style>
			.email-format{
				/*background-color:#083450;*/
				color:#000;
				height:auto;
				padding:10px 10px 10px 10px;
				width: 50%;}
		</style>

	</head>
	<body>
	<div class="email-format">
{{-- 		<h2>Laravel successefully sent an email!</h2> --}}
		<h2><img src="https://4-t.imgbox.com/vVZsX92M.jpg" width="50" /><br />Inquiry from BrianWardwell.com</h2>
			<p>Name: {{ $name }}<br />
			<p>Email: {{ $email }}<br />
			<p>Message: {{ $user_message }}</p>
	</div>
</body>
</html>




