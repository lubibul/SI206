<!-- **** SELENA MOELJADI **** -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Aspen, Colorado</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="beachstyles.css">
	<link rel="stylesheet" type="text/css" href="additionalinfo.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="jquery.bxslider.js"></script>	
	<!-- bxSlider CSS file -->
	<link href="jquery.bxslider.css" rel="stylesheet" />
</head>

	<body>
	<?php 
		$fName = basename(__FILE__);
		include "header.php"; 
	?>
<section class="bigtext">
<img src="img/aspen-banner.png" alt= "Aspen Banner">
</section>
	<ul class="bxslider">
        <li><img src="img/aspen-1.png" alt= "aspensnow1"></li>    
        <li><img src="img/aspen-2.png" alt= "aspensnow2"></li>  
        <li><img src="img/aspen-3.png" alt= "aspensnow3"></li>    
	</ul>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.bxslider').bxSlider();
		});

	</script>

	<div class="content">
		<div class="info"> <p>The village of Aspen, Colorado is lined with verdant aspen trees,
		 lending the name to this picturesque vacation destination. Nestled in between
		  world-class alpine skiing mountains, Aspen has transformed itself from a 
		  historical mining town into one of the premier ski destinations in the United States.
		   Aspen, Colorado’s high country atmosphere and abundance of gourmet dining restaurants,
		    cultural landmarks, upscale shopping and luxury ski resorts make it a year-round destination 
		    for both ski vacations and summer adventures. Aspen offers skiers, snowboarders and
		     snowmobilers limitless winter time activities at any of Aspen’s four mountains. Summer time 
		     guests can enjoy fly fishing, hiking and biking trails, along with a wealth of seasonal
		      events, unique to this Colorado village </p> </div>
	</div>

	<div class="view">  
	     <img src="img/aspenresort.png" alt= "aspen hotel">  
	     <div class="mask">  
	     <h2>Hotel</h2>  
	     <p>Explore your Alpine Getawayst</p>  
	         <a href="http://www.tripadvisor.com/Hotels-g29141-Aspen_Colorado-Hotels.html" class="info">Read More</a>  
	     </div>  
	</div>
	<div class="view">  
	     <img src="img/aspenactivities.png" alt= "aspen activities">  
	     <div class="mask">  
	     <h2>Activities</h2>  
	     <p>What to do?</p>  
	         <a href="http://www.tripadvisor.com/Attractions-g29141-Activities-Aspen_Colorado.html" class="info">Read More</a>  
	     </div>  
	</div>
	<div class="view">  
	     <img src="img/aspenfood.png" alt= "aspen wine and food">  
	     <div class="mask">  
	     <h2>Restaurants</h2>  
	     <p> There's everything from Thai to German</p>  
	         <a href="http://www.aspenchamber.org/explore-aspen/restaurants-nightlife" class="info">Read More</a>  
     	</div>
     </div>  

     		<div class="info">
		<h2> Write a Comment </h2>
		<form> 
<textarea name="comments" id="comments" placeholder="What's it like up in Aspen?">
</textarea><br />
<input type="submit" value="Submit" />
</form>
</div>
</div>
</br>
     
     <?php include "footer.php"; ?>
	</body>
</html>