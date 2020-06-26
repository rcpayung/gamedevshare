<?php
	session_start();
	if (isset($_POST['login'])) {
		$db = mysqli_connect("localhost","root","Vrk77vedAS@","db");
		
		if (!$db) {
			die("Connection Failed.");
		}
		$email = $_POST['email'];
		$pass = $_POST['password'];
		
		if (empty($email) || empty($pass)) {
			header("Location: ../login/?m=".$email);
			exit();
		} else {
			$email = mysqli_real_escape_string($db,stripslashes(strip_tags($email)));
			$pass = mysqli_real_escape_string($db,stripslashes(strip_tags($pass)));
			
			$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
			$query = mysqli_query($db,$sql);
			$row = mysqli_fetch_array($query);
			$dataPass = $row['password'];
			
			$verify = password_verify($pass,$dataPass);
			
			if ($verify) {
				// Login.
				echo "Success";
				$_SESSION['id'] = $row['id'];
				$_SESSION['display'] = $row['fullname'];
				$_SESSION['isCompany'] = $row['fromcompany'];
				$_SESSION['company'] = $row['company'];
				mysqli_close($db);
				header("Location: /EN/?login=success");
				exit();
			} else {
				mysqli_close($db);
				echo "Invalid credentials or user does not exist.";
				header("Location: /EN/login/?error=invUsr");
				exit();
			}
			
		}
	}
?>