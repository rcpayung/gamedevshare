<?php
	session_start();
	if (isset($_POST['register'])) {
		$db = mysqli_connect("localhost","root","Vrk77vedAS@","db");
		
		if (!$db) {
			die("Connection Failed.");
		}
		$email = $_POST['reg_email'];
		$pass = $_POST['reg_pass'];
		$pass_re = $_POST['reg_repeat'];
		$name = $_POST['reg_name'];
		$phone = $_POST['reg_phone'];
		$company = $_POST['reg_company'];
		$iscompany = isset($_POST['reg_isCom']) && $_POST['reg_isCom'] ? 1 : 0;
		$emarket = isset($_POST['reg_notifs']) && $_POST['reg_notifs'] ? 1 : 0;
		$readTOS = isset($_POST['reg_tos']) && $_POST['reg_tos'] ? 1 : 0;
		
		if (empty($email) || empty($pass) || empty($pass_re) || empty($name)) {
			header("Location: ../login/?m=".$email."&n=".$name);
			exit();
		} else {
			$email = mysqli_real_escape_string($db,stripslashes(strip_tags($email)));
			$pass = mysqli_real_escape_string($db,stripslashes(strip_tags($pass)));
			$pass_re = mysqli_real_escape_string($db,stripslashes(strip_tags($pass_re)));
			$name = mysqli_real_escape_string($db,stripslashes(strip_tags($name)));
			$phone = mysqli_real_escape_string($db,stripslashes(strip_tags($phone)));
			$company = mysqli_real_escape_string($db,stripslashes(strip_tags($company)));
			
			$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
			$query = mysqli_query($db,$sql);
			$result = mysqli_fetch_array($query);
			
			if ($pass != $pass_re) {
				echo "Passwords do not match!";
				exit();
			} else {
				$pass = password_hash($pass,PASSWORD_DEFAULT);
			}
			
			if (!empty($result['email'])) {
				echo "User already exists. Please login or create a differnt user.";
				exit();
			} else {
				// register user.
				$sql = "INSERT INTO `users` (`id`, `email`, `password`, `company`, `fullname`, `phone`, `address`, `ispremium`, `premiumuntil`, `fromcompany`,`emarket`,`readtos`) 
									 VALUES (NULL, '$email', '$pass', '$company', '$name', '$phone ', 'NIL', '0', '2020-05-05 00:00:00', '$iscompany','$emarket','$readTOS')";
				if (mysqli_query($db,$sql)) {
					echo "SUCCESS";
					header("Location: /EN/");
				}
				else {
					echo "FAILURE";
				}
			}
		}
		mysqli_close($db);
	}
?>