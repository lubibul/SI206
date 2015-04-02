<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Aspen, Colorado</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="beachstyles.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="jquery.bxslider.js"></script>	
	<!-- bxSlider CSS file -->
	<link href="jquery.bxslider.css" rel="stylesheet" />
</head>

	<body>
	<?php
		include "header.php";
	?>
		<h1>Aspen, Colorado</h1>

	<ul class="bxslider">
            <li><img src="img/aspen-1.png" alt= "aspensnow1"></a></li>    
            <li><img src="img/aspen-2.png" alt= "aspensnow2"></a></li>  
            <li><img src="img/aspen-3.png" alt= "aspensnow3"></a></li>    
                          
</ul>
</br>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.bxslider').bxSlider();
			});

		</script>

	</br>
		<h2>The village of Aspen, Colorado is lined with verdant aspen trees,
		 lending the name to this picturesque vacation destination. Nestled in between
		  world-class alpine skiing mountains, Aspen has transformed itself from a 
		  historical mining town into one of the premier ski destinations in the United States.
		   Aspen, Colorado’s high country atmosphere and abundance of gourmet dining restaurants,
		    cultural landmarks, upscale shopping and luxury ski resorts make it a year-round destination 
		    for both ski vacations and summer adventures. Aspen offers skiers, snowboarders and
		     snowmobilers limitless winter time activities at any of Aspen’s four mountains. Summer time 
		     guests can enjoy fly fishing, hiking and biking trails, along with a wealth of seasonal
		      events, unique to this Colorado village </h2>

<div>
	Hotel Info
</div>

</br>

	<?php
			include "footer.php" ;
	?>
	</body>
</html>