<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Book Your Trip</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

<?php include 'header.php'; ?>

<h1>Thank You!</h1>

<p>Thank you <?php echo $_POST["name"]; ?>!</p>
<p>Our offices will send a confirmation email to <?php echo $_POST["email"]; ?> shortly!</p>

<p>Leaving From: <?php echo $_POST["leaving"]; ?> on <?php echo $_POST["departure-date"]; ?></p>
<p>Destination: <?php echo $_POST["dest"]; ?> on <?php echo $_POST["return-date"]; ?></p>

<p>Group Size: <?php echo $_POST["group-size"]; ?></p>

<a href="index.php">Click here to return to the front page.</a>

</body>
<html>