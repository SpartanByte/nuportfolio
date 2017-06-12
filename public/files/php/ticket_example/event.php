<!DOCTYPE html>
<!--	Author: Brian Wardwell
		Last Edited: December 6th, 2015
		File:	event.php
		Description: Processes event tickets request from user input from event.html 
-->

<html>
<head>
	<title>Performance</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		// Get user data from event.html 
		$ticketNumber = $_POST[ticketNumber];
		$firstName = $_POST[firstName];
		$lastName = $_POST[lastName];
		$phoneNumber = $_POST[phoneNumber];
	/* Ticket File Program: */
		$ticketFile = fopen("ticketCount.txt", "r");
		$ticketSold = fgets($ticketFile);
	/* Closing ticketCount.txt File */
		fclose($ticketFile);
	/* Getting Information From User */
		// $ticketNumber = $_POST[ticketNumber];
		
		// ticketChecker adds ticketSold with number of tickets user wants. If above 100, the message will be printed.
		$ticketChecker = $ticketSold + $ticketNumber;
		if ($ticketChecker > 100) {
			print ("<p> We're sorry. There are no longer that number of tickets available. Please enter a lower quantity.</p>");
		} 
		else {
		/* Writing new ticketCount.txt, ticketChecker written to file for accurate number of total tickets sold.*/
			$logFile = fopen("ticketCount.txt", "w");
			fputs($logFile, $ticketChecker);
		/* Closing ticketCount.txt */
			fclose($logFile);

		
		/* Calculating Price Total Program */
			$priceTotal = $ticketNumber * 35;
		/* Displaying Information For User */
			print ("<h1> Thank you for your order!</h2>");
			print ("<h2> Your order details are below: </h2>");
			print ("<p> $firstName $lastName, at $phoneNumber, you ordered a total of <strong>$ticketNumber tickets</strong></p>");
			print ("<p> Your order total is <strong>$$priceTotal</strong>. Thank you very much and enjoy the show!</p>");
		}
	?>

</body>
</html>
