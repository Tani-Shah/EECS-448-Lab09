<?php
	libxml_use_internal_errors(true);
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$brushPen = filter_input(INPUT_POST, 'brushPen', FILTER_VALIDATE_INT);
	$focus = filter_input(INPUT_POST, 'focus', FILTER_VALIDATE_INT);
	$consistency = filter_input(INPUT_POST, 'consistency', FILTER_VALIDATE_INT);
	$commitment = filter_input(INPUT_POST, 'commitment', FILTER_VALIDATE_INT);
	$intentional = filter_input(INPUT_POST, 'intentional', FILTER_VALIDATE_INT);
	$pointedPen = filter_input(INPUT_POST, 'pointedPen', FILTER_VALIDATE_INT);
	$shipping = $_POST['shipping'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$delivery = 0;
	$deliveryTag = "";
	$total = 0;

	

	if($shipping == "free"){
		$delivery = 0;
		$deliveryTag = "Free shipping";
	}else if($shipping == "threeDay"){
		$delivery = 5;
		$deliveryTag = "Three Days";
	}else if ($shipping == "overNight"){
		$delivery = 50;
		$deliveryTag = "Over night";
	}
	
	$brushPenCost = 5;
	$focusCost = 10;
	$consistencyCost = 10;
	$commitmentCost = 20;
	$intentionalCost = 10;
	$pointedPenCost = 10;

	$total = ($brushPenCost * $brushPen) + ($consistencyCost * $consistency) + ($focusCost * $focus);
	$total+= ($commitmentCost * $commitment) + ($intentionalCost * $intentional) + ($pointedPenCost * $pointedPen); 

	$total += $delivery;



	echo "<!DOCTYPE html>
	<html>
	<head>
		<title>Purchase Success</title>
		<link rel='stylesheet' type='text/css' href='style.css'>
	</head>
	<body>
		<h2>Welcome to the Calligraphy Center!</h2>
		<p align='left'>Your username is: ". $username . 
		"<br>Your password is: " . $password .
		 "</p>";
	
	echo "<p align='left'>Here is a copy of your receipt:</p>";
	echo "<table><thead><tr>";
	echo "<th></th>";
	echo "<th>Quantity</th>" ; 
	echo "<th>Cost Per Item</th>";
	echo "<th>Sub Total</th></tr></thead>";
	
	echo "<tbody><tr><th>Brush Pen Calligraphy</th>";
	echo "<td>". $brushPen . "</td>";
	echo "<td>$5</td>" ;
	echo "<td>$" . ($brushPenCost * $brushPen) . "</td>";

	echo "<tbody><tr><th>Consistency</th>";
	echo "<td>". $consistency . "</td>";
	echo "<td>$10</td>" ;
	echo "<td>$" . ($consistencyCost * $consistency) . "</td>";

	echo "<tbody><tr><th>Focus</th>";
	echo "<td>". $focus . "</td>";
	echo "<td>$10</td>" ;
	echo "<td>$" . ($focusCost * $focus) . "</td>";

	echo "<tbody><tr><th>Commitment</th>";
	echo "<td>". $commitment . "</td>";
	echo "<td>$20</td>" ;
	echo "<td>$" . ($commitmentCost * $commitment) . "</td>";

	echo "<tbody><tr><th>Intentional</th>";
	echo "<td>". $intentional . "</td>";
	echo "<td>$10</td>" ;
	echo "<td>$" . ($intentionalCost * $intentional) . "</td>";

	echo "<tbody><tr><th>Pointed Pen Calligraphy</th>";
	echo "<td>". $pointedPen . "</td>";
	echo "<td>$10</td>" ;
	echo "<td>$" . ($pointedPenCost * $pointedPen) . "</td>";	

	echo "<tbody><tr><th>Shipping</th>";
	echo "<td colspan='2'>". $deliveryTag . "</td>";
	echo "<td>$" . $delivery . "</td>";

	echo "<tbody><tr><th colspan='3'>Total Cost</th>";
	echo "<th>$" . $total . "</th>";

	echo "</tbody></table>";

	echo "</body>
	</html>";
?>


