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

<h1>Thank You</h1>

<p>Thank you <?php echo $_POST["name"]; ?>!</p>
<p>Our offices will send a confirmation email to <?php echo $_POST["email"]; ?> shortly!</p>

<p>Leaving From: <?php echo $_POST["leaving"]; ?></p>
<p>Destination: <?php echo $_POST["dest"]; ?></p>

</body>
<html>