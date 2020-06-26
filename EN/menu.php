<?php
	session_start();
	if ($sessionname == $_SESSION['company']) {
		echo "
		<a href='#'>Company Profile</a>
		<a href='#'>Company Analytics</a>
		<a href='#'>Account Settings</a>
		<a href='#'>List a Job</a>
		<a href='/EN/login/logout.php'>Log Out</a>";
	} else {
		echo "
		<a href='#'>My Profile</a>
		<a href='#'>Account Settings</a>
		<a href='#'>Go Premium</a>
		<a href='/EN/login/logout.php'>Log Out</a>";
	}

?>