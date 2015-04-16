<!-- **** LULU TANG ****-->

<?php
	echo "<header>";
	echo "<img class=\"hamburger\" src=\"img/hamburger.png\" onClick=\"toggleNav()\" alt=\"navigation hamburger\" />";
	echo "<a href=\"index.php\"><img class=\"logo\" src='img/logo.png' alt='company logo'/></a>";
	echo "<div class=\"clear\"></div>";
	echo "</header>";
	echo "<nav id=\"nav\">";
		echo "<a href=\"index.php\"";
			if ($fName == "index.php") echo " class=\"current\"";
		echo ">Home</a>";
		echo "<a href=\"contact.php\"";
			if ($fName == "contact.php") echo " class=\"current\"";
		echo ">Book Now</a>";
		echo "<a href=\"beach.php\"";
			if ($fName == "beach.php") echo " class=\"current\"";
		echo ">PCB</a>";
		echo "<a href=\"aspen.php\"";
			if ($fName == "aspen.php") echo " class=\"current\"";
		echo ">Aspen</a>";
		echo "<a href=\"seattle.php\"";
			if ($fName == "seattle.php") echo " class=\"current\"";
		echo ">Seattle</a>";
		echo "<a href=\"about.php\"";
			if ($fName == "about.php") echo " class=\"current\"";
		echo ">About</a>";
	echo "</nav>";

	echo "<script>
		function toggleNav() {
			if (document.getElementById(\"nav\").style.display == \"block\")
				document.getElementById(\"nav\").style.display = \"none\";
			else 
				document.getElementById(\"nav\").style.display = \"block\";
		}
	</script>";
?>