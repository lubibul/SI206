<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Book Your Trip</title>
	<link rel="stylesheet" type="text/css" href="default.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<?php include 'header.php'; ?>

	<h1>Book Now!</h1>

	<div class="map">
		<img class="map" id="seattle" src = "img/seattle.png" />
		<img class="map" id="aspen" src = "img/aspen.png" />
		<img class="map" id="pcb" src = "img/pcb.png" />
	</div>

	<div class="form">
		<form onSubmit="return validate()" method="get">
		<fieldset>
			<label>Leaving From:
				<select name="from">
					<option value="DTW">Detroit, MI - Metro Wayne Co. (DTW)</option>
					<option value="LGA">New York, NY - LaGuardia (LGA)</option>
				</select>
			</label>
			<label>Destination:
				<select name="destination">
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
				<input type = "text" id = "name"><br />
			</label>
			<label>Email:
				<input type = "email" id = "email"><br />
			</label>
			<label>Confirm Email:
				<input type = "email" id = "email-2"><br />
			</label>
			<label>Phone Number:
				<input type = "tel" pattern = "[0-9]{3}[\-][0-9]{3}[\-][0-9]{4}" id = "phone"><br />
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
		<button type="submit">Get Started!</button>
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