<!-- **** LULU TANG **** -->

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
	<?php 
		$fName = basename(__FILE__);
		include 'header.php'; 
	?>
	
	<section class="bigtext">
		<img src="img/travelagencylogo.png" alt="Travel Agency Banner"/>
	</section>
	<section class="card-container">
		<a href="beach.php">
			<div class="card">
				<h1>PCB, FL</h1>
				<img src="img/pcb-1.png" alt="pcb" />
				<p>Get away to the endless sandy beaches of Panama City Beach, 
					where the parties are just as endless and the excitement just as crazy.</p>
			</div>
		</a>
		<a href="aspen.php">
			<div class="card">
				<h1>Aspen, CO</h1>
				<img src="img/aspen-1.png" alt="aspen" />
				<p>Spring break has never been cooler than at Aspen.
					Go wild with these beautiful mountains and fresh air!</p>
			</div>
		</a>
		<a href="seattle.php">
			<div class="card">
				<h1>Seattle, WA</h1>
				<img src="img/seattle-1.png" alt="seattle" />
				<p>Ever wanted to be right in the middle of the hustle and bustle?
					Seattle is the place for you!</p>
			</div>
		</a>	
	</section>

	<?php include "footer.php"; ?>
</body>
</html>