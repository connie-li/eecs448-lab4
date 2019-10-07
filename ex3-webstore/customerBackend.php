<?php
	$quantP1 = $_POST["quant-p1"];
	$quantP2 = $_POST["quant-p2"];
	$quantP3 = $_POST["quant-p3"];
	$p1Subtotal = $quantP1 * 10.00;
	$p2Subtotal = $quantP2 * 6;
	$p3Subtotal = $quantP3 * 14.00;

	$ship = $_POST["ship"];
	$shipCost = 0;
	$shipType = "";
	if($ship == "ship-free") {
		$shipCost = 0.00;
		$shipType = "Free 7-day";
	}
	else if($ship == "ship-overnight") {
		$shipCost = 50.00;
		$shipType = "Overnight";
	}
	else {
		$shipCost = 5.00;
		$shipType = "3-day";
	}

	$cost = $p1Subtotal + $p2Subtotal + $p3Subtotal + $shipCost;

	// generate HTML header w/ included styles
	echo '<html>
		<head>
			<meta charset="utf-8">
			<title>Exercise 3: Web Store - Lab 4, EECS 448</title>
			<link rel="stylesheet" type="text/css" href="receipt.css">
		</head>
		<body>
			<h4>EECS 448, Lab 4, Exercise 3: Web Store</h4>
			<div id="content"><h1>Thank you for your order!</h1><div class="inner-content">';
	echo '<p class="p-block">Username: ', $_POST["username"], '</p><p class="p-block">Password: ', $_POST["password"], '</p>';

	// receipt table
	echo '<div><table><caption>Your receipt: </caption>
		<tr><td></td><th>Quantity</th><th>Cost per each</th><th>Subtotal</th></tr>';
	// product 1
	echo '<tr><th scope="row">Product 1</th><td>', $quantP1, '</td><td>$10.00</td><td>$', $p1Subtotal, '</td></tr>';
	// product 2
	echo '<tr><th scope="row">Product 2</th><td>', $quantP2, '</td><td>$6.00</td><td>$', $p2Subtotal, '</td></tr>';
	// product 3
	echo '<tr><th scope="row">Product 3</th><td>', $quantP3, '</td><td>$14.00</td><td>$', $p3Subtotal, '</td></tr>';
	echo '<tr><th scope="row">Shipping</th><td colspan="2">', $shipType, '</td><td>$', $shipCost, '</td></tr>';
	echo '<tr><th colspan="3">Total Cost</th><td>$', $cost, '</td></tr>';
	
	echo '</table></div>';

	echo '</div></body></html>';
?>