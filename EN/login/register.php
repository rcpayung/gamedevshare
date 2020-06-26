<?php
	$conn = new mysqli('localhost','root','Vrk77vedAS@','db');

	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	// Register
	$email_reg = strip_tags($_POST['email_reg']); // Username
	$pass_reg = strip_tags($_POST['pass_reg']); // Password
	$pass_rep = strip_tags($_POST['pass_rep']); // Repeated Password.
	$full_name = strip_tags($_POST['full_name']); // Full Name
	$phone = strip_tags($_POST['phone']);
	$company = strip_tags($_POST['company']);
	
	$email_reg = stripslashes($email_reg); // Username
	$pass_reg = stripslashes($pass_reg); // Password
	$pass_rep = stripslashes($pass_rep); // Repeated Password.
	$full_name = stripslashes($full_name); // Full Name
	$phone = stripslashes($phone);
	$company = stripslashes($company);
	
	$email_reg = mysqli_real_escape_string($db, $email_reg); // Username
	$pass_reg = mysqli_real_escape_string($db, $pass_reg); // Password
	$pass_rep = mysqli_real_escape_string($db, $pass_rep); // Repeated Password.
	$full_name = mysqli_real_escape_string($db, $full_name); // Full Name
	$phone = mysqli_real_escape_string($db, $phone);
	$company = mysqli_real_escape_string($db, $company);
	$fromComp = 1;
	if ($pass_reg != $pass_rep) {
		echo "Passwords do not match. Please fix to continue.";
		return;
	}
	$pass_hash = password_hash($pass_reg,PASSWORD_DEFAULT);
	$sql = "INSERT INTO 'users' (id, email, password, company, fullname, phone, address, ispremium, premiumuntil, fromcompany) VALUES (NULL, '$email_reg', '$pass_hash', '$company', '$full_name', '$phone', 'nil', '0', '2020-05-05 00:00:00', '1')";
	
	$query = mysqli_stmt_init($db);
	mysqli_stmt_execute($query);
	mysqli_stmt_store_result($query);
	
	echo $query;


?>