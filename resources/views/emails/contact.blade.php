<html>
	<head>
		<style>
			.email-format{
				color:#000;
				height:auto;
				padding:10px 10px 10px 10px;
				width: 50%;}
		</style>
	</head>
	<body>
    	<div class="email-format">
            <h2><img src="https://4-t.imgbox.com/vVZsX92M.jpg" width="50" /><br />Inquiry from BrianWardwell.com</h2>
            <p>Name: {{ $name }}</p>
            <p>Email: {{ $email }}</p>
            <p>Reason Contacted: {{ $reason }}</p>
            <p>Message: {{ $user_message }}</p>
    	</div>
    </body>
</html>