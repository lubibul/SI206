<!-- **** LULU TANG ****-->

<?php
	echo "<header>";
	echo "<img class=\"hamburger\" src=\"img/hamburger.png\" onClick=\"toggleNav()\">";
	echo "<a href=\"index.php\"><img class=\"logo\" src='img/logo.png' alt='company logo'/></a>";
	echo "<div class=\"clear\"></div>";
	echo "</header>";
	echo "<nav id=\"nav\">
		<a href=\"index.php\">Home</a>
		<a href=\"contact.php\">Book Now</a>
		<a href=\"beach.php\">PCB</a>
		<a href=\"aspen.php\">Aspen</a>
		<a href=\"seattle.php\">Seattle</a>
		<a href=\"about.php\">About</a>
	</nav>";

	echo "<script>
		function toggleNav() {
			if (document.getElementById(\"nav\").style.display == \"block\")
				document.getElementById(\"nav\").style.display = \"none\";
			else 
				document.getElementById(\"nav\").style.display = \"block\";
		}
	</script>";
?>