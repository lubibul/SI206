<!-- **** SELENA MOELJADI **** -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Panama City Beach, Florida</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="additionalinfo.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="beachstyles.css">

	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="jquery.bxslider.js"></script>	
	<!-- bxSlider CSS file -->
	<link href="jquery.bxslider.css" rel="stylesheet" />
</head>

	<body>
	<?php include "header.php"; ?>
	<section class="bigtext">
	<img src= "img/pcb-banner.png" alt= "PCB Banner">	
	</section>
	<ul class="bxslider">
	    <li><img src="img/pcb-beach.png" alt= "pcbresort"></li>          
	    <li><img src="img/pcb-party.jpg" alt= "pcbrealness"></li>          
	    <li><img src="img/pcb-nightlife.jpg" alt= "nighttime"></li>          
	</ul>

	<div class="content">
		<div class="info"><p>
		Located on the warm waters of the Gulf of Mexico,
		 there are 27 miles of sugary white sand beaches where
		drinking on the beach is legal. What else could a spring 
		breaker ask for? The main strip offers endless choices 
		of beachfront hotels from deluxe to budget properties.
		There's also a wide variety of clubs and deck bars offering
		corporate sponsored events and live concerts, like Sharky's,
		 Spinnaker, and the largest nightclub in the U.S., Club La Vela.
		Lay out and get a tan, parasail, snorkel for starfish in clear
		blue waters or jetski right in front of your hotel in PCB, Florida.</p> </div>
	</div>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('.bxslider').bxSlider();
		});

	</script>

	<div class="view">
	     <img src="img/beachhotel.png" alt= "beach hotel">  
	     <div class="mask">  
	     <h2>Hotel</h2>  
	     <p>Beachside Accomodations</p>  
	         <a href="http://www.tripadvisor.com/Hotels-g34543-Panama_City_Beach_Florida-Hotels.html" class="info">Read More</a>  
	     </div>  
	</div>
	<div class="view">
	     <img src="img/beachactivities.png" alt= "beach activities">  
	     <div class="mask">  
	     <h2>Activities</h2>  
	     <p>Fun in the Sun</p>  
	         <a href="http://www.tripadvisor.com/Attractions-g34543-Activities-Panama_City_Beach_Florida.html" class="info">Read More</a>  
	     </div>
	</div>
	<div class="view">
	     <img src="img/beachfood.png" alt= "beach wine and food">  
	     <div class="mask">  
	     <h2>Restaurants</h2>  
	     <p> Gastronomic Delights</p>  
	         <a href="http://www.tripadvisor.com/Restaurants-g34543-Panama_City_Beach_Florida.html" class="info">Read More</a>  
	     </div>  
	</div>
</br>
</br>
	<img src= "img/testimonials-banner.png" alt= "Testimonials Banner" id= "testimonialbanner">	
<div class="outer-div">	
<div class="inner-div"><!-- <img src="img/pcb-partygoer.png" alt= "Sam the Party boy at PCB!" height= 145px  width = 200px> -->
<h3>Sam Smith from Long Island, NY says: Thanks for all the memories TRAVEL AGENCY! You rock!</h3> 
</div>
</div>

<div class="outer-div">	
<div class="inner-div"><!-- <img src="img/gary-pcbgoer.png" alt= "GARY" height= 145px  width = 230px> -->
	<h3> Gary Smorgasbord from Portland, OR says: I don't remember much from the trip, but from what I hear, it sounded amazing!! THanks Travel Agency!</h3> 
</div>
</div>

<div class="outer-div">	
<div class="inner-div"><!-- <img src="img/pcb-partygoer.png" alt= "Sam the Party boy at PCB!" height= 145px  width = 200px> -->
<h3>Cara Weeldon from NYC says: Amazing adventure it PCB, Florida. I got to jetski, waterski, and swim with dolphins! </h3> 
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
	<?php include "footer.php"; ?>
	</body>
</html>