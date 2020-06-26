<?php
	$db = mysqli_connect("localhost","root","Vrk77vedAS@","db");
	
	if (!$db) {
		die("Connection Failed.".mysqli_connect_error());
	} else {
		echo "Connection made.";
	}
?>