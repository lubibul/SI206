<!-- **** BEN BEALE **** -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1">
		<title>Book Your Trip</title>
		<link rel="stylesheet" type="text/css" href="default.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="additionalinfo.css">
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="jquery.bxslider.js"></script>
		<!-- bxSlider CSS file -->
		<link href="jquery.bxslider.css" rel="stylesheet" />
	</head>
	<body>
		<?php include 'header.php'; ?>

		<section class="bigtext">
			<img src="img/seattle-banner.png" alt= "Seattle Banner">
		</section>
		
		<ul class="bxslider">
			<li><img src="img/seattle-skyline.jpg" /><p class="bx-caption">Check out the Space Needle!</p></li>
			<li><img src="img/seattle-waterfront.jpg" /><p class="bx-caption">Take a boat ride!</p></li>
			<li><img src="img/seattle-seahawks.jpg" /><p class="bx-caption">Cheer for our winning<br>sports teams!</p></li>
			<li><img src="img/seattle-emp.jpg" /><p class="bx-caption">Enrich yourself with<br>a unique exhibit!</p></li>
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
				<h2 id="hotels"><p><a href="http://www.hotels.com/search.do?resolved-location=CITY%3A1481165%3ASRS%3AUNKNOWN&destination-id=1481165&q-destination=Seattle,%20Washington,%20United%20States%20of%20America&q-rooms=1&q-room-0-adults=2&q-room-0-children=0">Hotels</a></p></h2>
				<h2 id="bars"><p><a href="http://www.barfinder.com/listings/search.aspx?keywords=seattle&name=&address=&city=&spc=&area=&zipcode_radius=15&zipcode=&lat=&lon=&tlat=&tlon=&searchi.x=80&searchi.y=23&searchi=Search&search=Search">Bars</a></p></h2>

			</div>
		</div>

		<div class="more-container-right">
			<div class="more-right">
				<h2 id="sports"><p><a href="http://www.stubhub.com/search/doSearch?searchStr=seattle&pageNumber=1&resultsPerPage=50&searchMode=event&start=0&rows=50&geo_exp=1">Sports</a></p></h2>
				<h2 id="concerts"><p><a href="http://www.stubhub.com/search/doSearch?searchStr=seattle+concert&pageNumber=1&resultsPerPage=50&searchMode=event&start=0&rows=50&geo_exp=1">More!</a></p></h2>
			</div>
		</div>

		<section class="visible-on-mobile">
			<div class="view seattle">  
			     <img src="img/aspenresort.png" alt= "aspen hotel">  
			     <div class="mask">  
			     <h2>Hotels</h2>  
			     <p>Explore your Alpine Getawayst</p>  
			         <a href="http://www.tripadvisor.com/Hotels-g29141-Aspen_Colorado-Hotels.html" class="info">Read More</a>  
			     </div>  
			</div>
			<div class="view seattle">  
			     <img src="img/seattleConcert.jpg" alt= "aspen activities">  
			     <div class="mask">  
			     <h2>Concerts</h2>  
			     <p>What to do?</p>  
			         <a href="http://www.tripadvisor.com/Attractions-g29141-Activities-Aspen_Colorado.html" class="info">Read More</a>  
			     </div>  
			</div>
			<div class="view seattle">  
			     <img src="img/aspenfood.png" alt= "aspen wine and food">  
			     <div class="mask">  
			     <h2>Bars</h2>  
			     <p> There's everything from Thai to German</p>  
			         <a href="http://www.aspenchamber.org/explore-aspen/restaurants-nightlife" class="info">Read More</a>  
		     	</div>
		     </div>  
		     <div class="view seattle">  
			     <img src="img/aspenfood.png" alt= "aspen wine and food">  
			     <div class="mask">  
			     <h2>Sports</h2>  
			     <p> There's everything from Thai to German</p>  
			         <a href="http://www.aspenchamber.org/explore-aspen/restaurants-nightlife" class="info">Read More</a>  
		     	</div>
		     </div>  
		</section>

		<?php include 'footer.php'; ?>
	</body>
</html>