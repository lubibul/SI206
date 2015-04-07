<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1">
		<title>Book Your Trip</title>
		<link rel="stylesheet" type="text/css" href="default.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="jquery.bxslider.js"></script>
		<!-- bxSlider CSS file -->
		<link href="jquery.bxslider.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'header.php'; ?>
		<h1 class="seattle">Seattle</h1>
		<ul class="bxslider">
			<li><img src="img/seattle-skyline.jpg" /><p class="bx-caption">Check out the Space Needle!</p></li>
			<li><img src="img/seattle-waterfront.jpg" /><p class="bx-caption">Take a boat ride!</p></li>
			<li><img src="img/seattle-seahawks.jpg" /><p class="bx-caption">Cheer for our winning<br>sports teams!</p></li>
			<li><img src="img/seattle-emp.jpg" /><p class="bx-caption">Enrich yourself with<br>a unique exhibit!</p></li>
		</ul>

		<div class="whatelse-left">
			<ul class="whatelse">
				<li>Hotels</li>
				<li>Food & Drink</li>
			</ul>
		</div>

		<div class="whatelse-right">
			<ul class="whatelse">
				<li>Sports</li>
				<li>Concerts & Shows</li>
			</ul>
		</div>

		<div class="content">
			<p class="seattle">Do something different for your next spring break. 
				Maybe you -- like many other students -- have always gone to the same vacation spots. 
				Instead of repeating those same experiences, consider taking a trip to the gem of the Pacific Northwest known as Seattle. 
				With many attractions like the famous Space Needle, the EMP Museum of music, 
				sci-fi, and pop culture, exciting night life and miles of beautiful waterfront 
				on the Puget Sound, Seattle truly does have something for everyone.</p>
		</div>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider();
			});

		</script>

		<?php include 'footer.php'; ?>
	</body>
</html>