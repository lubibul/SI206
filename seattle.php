<!-- **** BEN BEALE **** -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1">
		<title>Seattle, Washington</title>
		<link rel="stylesheet" type="text/css" href="default.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="additionalinfo.css">
		<link rel="stylesheet" type="text/css" href="beachstyles.css">

		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="jquery.bxslider.js"></script>
		<!-- bxSlider CSS file -->
		<link href="jquery.bxslider.css" rel="stylesheet" />
	</head>
	<body>
		<?php 
			$fName = basename(__FILE__);
			include 'header.php'; 
		?>

		<section class="bigtext">
			<img src="img/seattle-banner.png" alt= "Seattle Banner">
		</section>
		
		<ul class="bxslider">
			<li><img src="img/seattle-skyline.jpg" alt="seattle skykine"/><p class="bx-caption">Check out the Space Needle!</p></li>
			<li><img src="img/seattle-waterfront.jpg" alt="settle waterfront"/><p class="bx-caption">Take a boat ride!</p></li>
			<li><img src="img/seattle-seahawks.jpg" alt="seattle seahawks"/><p class="bx-caption">Cheer for our winning<br>sports teams!</p></li>
			<li><img src="img/seattle-emp.jpg" alt="seattle museum"/><p class="bx-caption">Enrich yourself with<br>a unique exhibit!</p></li>
		</ul>

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

		<div class="more-container-left">
			<div class="more-left">
				<h2 id="hotels"><a href="http://bit.ly/1aPBuuN">Hotels</a></h2>
				<h2 id="bars"><a href="http://bit.ly/1CWkNEw">Bars</a></h2>

			</div>
		</div>

		<div class="more-container-right">
			<div class="more-right">
				<h2 id="sports"><a href="http://bit.ly/1zdQAjX">Sports</a></h2>
				<h2 id="concerts"><a href="http://bit.ly/1b0gthK">More!</a></h2>
			</div>
		</div>

		<section class="visible-on-mobile">
			<div class="view seattle">  
			     <img src="img/seattleHotel.jpg" alt= "seattle hotel">  
			     <div class="mask">  
			     <h2>Hotels</h2>  
			     <p>Explore your Seattle hotels</p>  
			         <a href="http://bit.ly/1aPBuuN" class="info">Read More</a>  
			     </div>  
			</div>
			<div class="view seattle">  
			     <img src="img/seattleConcert.jpg" alt= "seattle concert">  
			     <div class="mask">  
			     <h2>Concerts</h2>  
			     <p>What to do?</p>  
			         <a href="http://bit.ly/1b0gthK" class="info">Read More</a>  
			     </div>  
			</div>
			<div class="view seattle">  
			     <img src="img/seattleBar.jpg" alt= "seattle bar">  
			     <div class="mask">  
			     <h2>Bars</h2>  
			     <p> There's everything from Thai to German</p>  
			         <a href="http://bit.ly/1CWkNEw" class="info">Read More</a>  
		     	</div>
		     </div>  
		     <div class="view seattle">  
			     <img src="img/seattleSports.jpg" alt= "aspen wine and food">  
			     <div class="mask">  
			     <h2>Sports</h2>  
			     <p> Home of the Super Bowl Champion Seahawks</p>  
			         <a href="http://bit.ly/1zdQAjX" class="info">Read More</a>  
		     	</div>
		     </div>  
		</section>
		<div class="info">
			<h2> Write a Comment </h2>
			<form> 
				<textarea name="comments" id="comments" placeholder="What's it like up in Seattle?">
				</textarea><br />
				<input type="submit" value="Submit" />
			</form>
		</div>
	</div>
	</br>

		<?php include 'footer.php'; ?>
	</body>
</html>