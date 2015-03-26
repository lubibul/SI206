<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1">
		<title>Book Your Trip</title>
		<link rel="stylesheet" type="text/css" href="default.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="jquery.bxslider.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'header.php'; ?>

		<ul class="bxslider">
			<li><img src="img/seattle-skyline.jpg" /></li>
			<li><img src="img/seattle-waterfront.jpg" /></li>
			<li><img src="img/seattle-seahawks.jpg" /></li>
			<li><img src="img/seattle-emp.jpg" /></li>
		</ul>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider();
			});

		</script>
	</body>





</html>