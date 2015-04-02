<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Travel Agency</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
	<?php include 'header.php'; ?>

	<nav>
		<a href="index.php">Home</a>
		<a href="contact.php">Book Now</a>
		<a href="beach.php">PCB</a>
		<a href="aspen.php">Aspen</a>
		<a href="seattle.php">Seattle</a>
		<a href="about.php">About</a>
	</nav>

	<!-- <div id="top-photos">
		<ul>
		    <li><a href="beach.php"><img src="img/pcb-1.png" alt="pcb" /></a>
		    </li><li><a href="aspen.php"><img src="img/aspen-1.png" alt="aspen" /></a>
			</li><li><a href="seattle.php"><img src="img/seattle-1.png" alt= "seattle" /></a></li>
		</ul>
	</div> -->
	<section>
		<h1>Welcome to Travel Agency!</h1>
		<!-- <p><a href="contact.php">Book Your Trip Now!</a></p> -->
	</section>
	<section class="card-container">
		<a href="beach.php">
			<div class="card">
				<h1>PCB, FL</h1>
				<img src="img/pcb-1.png" alt="pcb" />
			</div>
		</a>
		<a href="aspen.php">
			<div class="card">
				<h1>Aspen, CO</h1>
				<img src="img/aspen-1.png" alt="pcb" />
			</div>
		</a>
		<a href="seattle.php">
			<div class="card">
				<h1>Seattle, WA</h1>
				<img src="img/seattle-1.png" alt="pcb" />
			</div>
		</a>	
	</section>

	<?php include "footer.php"; ?>
</body>
</html>