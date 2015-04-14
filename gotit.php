<!-- **** LULU TANG **** -->

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

<h1>Thank You!</h1>

<?php
    $filename = "SaveInfo.csv";
    $isItExisting = (file_exists($filename));

 	$handle = fopen($filename, 'a');
	$msg = "Thank you ". $_POST['name'] . " for submitting your information.\n";	//EMail message
	$stringToAdd="";										//File information

	if (!$isItExisting){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";							//Make the column headings
		}
		$stringToAdd.="\n";									//Make sure file goes to next line
		fwrite($handle, $stringToAdd);						//Write the 
	}
	
	$stringToAdd="";										//Reset the file info to blank
	foreach($_POST as $name => $value) {
		echo "<p>$name : $value</p>";						//This is going to the screen
		$msg .="$name : $value\n";							//This is going to the email
		$stringToAdd.="$value,";							//This is going to the file
	}
	$stringToAdd.="\n";

	fwrite($handle, $stringToAdd);

	//now close the file
	fclose($handle); 
	$to = $_POST["email"];
	$headers = "From: ". $_POST["name"] ."<".$_POST["email"]. ">\r\n";
	
	mail($to, 'Form Data', $msg,$headers);

	echo "<h1>Email sent</h1>";
?>

<?php include 'footer.php'; ?>

</body>
</html>