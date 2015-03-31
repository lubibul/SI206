<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Book Your Trip</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- <link rel="stylesheet" type="text/css" href="form.css"> -->
	<link rel="stylesheet" type="text/css" href="form2.css">
</head>
<body>
	<script>
	    function selectDest(destination) {
		    var sel = document.getElementById('dest');
		    var opts = dest.options;

		    for(var opt, j = 0; opt = opts[j]; j++) {
		        if(opt.value == destination) {
		            sel.selectedIndex = j;
		            break;
		        }
		    }

		    refreshMap(destination);
	    }

	    function refreshMap (destination) {
	    	var newImage = "img/map-" + destination.toLowerCase() + "-selected.png";

		    var locations = document.getElementsByClassName("map");
		    for (var loc, j=0; loc = locations[j]; j++) {
		    	if (loc.src) {
	    			loc.src = "img/" + loc.id + ".png";
		    	}
		    }

			document.getElementById("map-" + destination).src = newImage;
	    }
	</script>

	<?php include 'header.php'; ?>

	<h1>Choose Your Destination!</h1>

	<div class="map">
		<img onClick="selectDest('Seattle')" class="map" id="map-Seattle" src = "img/map-seattle.png" />
		<img onClick="selectDest('Aspen')" class="map" id="map-Aspen" src = "img/map-aspen.png" />
		<img onClick="selectDest('PCB')" class="map" id="map-PCB" src = "img/map-pcb.png" />
	</div>

	<div class="form">
		<form onSubmit="return validate()" action="thankyou.php" method="post">
		<fieldset>
			<label>Leaving From:
				<select name="leaving">
					<option value="DTW">Detroit, MI - Metro Wayne Co. (DTW)</option>
					<option value="LGA">New York, NY - LaGuardia (LGA)</option>
				</select>
			</label>
			<label>Destination:
				<select id="dest" name="dest">
					<option value="PCB">Panama City Beach, Florida</option>
					<option value="Aspen">Aspen, Colorado</option>
					<option value="Seattle">Seattle, Washington</option>
				</select>
			</label>
			<label>Departure Date:
				<input type = "date">
			</label>
			<label>Return Date:
				<input type = "date">
			</label>
		</fieldset>
		<fieldset>
			<label>Name:
				<input type = "text" name = "name" id = "name"><br />
			</label>
			<label>Email:
				<input type = "email" name = "email" id = "email"><br />
			</label>
			<label>Confirm Email:
				<input type = "email" id = "email-2"><br />
			</label>
			<label>Phone Number:
				<input type = "tel" name ="tel" pattern = "[0-9]{3}[\-][0-9]{3}[\-][0-9]{4}" id = "phone"><br />
			</label>
		</fieldset>
		<fieldset>
			<label>Group Size:
				<input type = "number" id = "groupsize"></br />
			</label>
			<label>Personalize Your Plan<br />
				<input type = "checkbox" name="" value="Flight">Flight<br>
				<input type = "checkbox" name="" value="Hotel">Hotel<br>
				<input type = "checkbox" name="" value="Car">Car<br>
			</label>
			<label>Promo Code: 
				<input type = "text" id ="promo"><br />
			</label>
		</fieldset>
			<button type="submit">Let's Fly!</button>
		</form>
	</div>

	<?php include 'footer.php'; ?>

	<script>
		function validate() {
			var email1 = document.getElementById("email");
			var email2 = document.getElementById("email-2");

			if (email1.value != email2.value) {
				alert("The emails don't match!");
				return false;
			}
		}
	</script>
</body>