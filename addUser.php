<?php
	session_start();
	ini_set('display_errors', 1);
	require_once __DIR__ . '/database/connection.php';

	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];
	$homeAddress = $_POST["homeAddress"];
	$password = $_POST["password"];
	$cellPhone = $_POST["cellPhone"];
				
	$sql = "INSERT INTO users ( first_name, last_name, email_address, user_password, home_address, cell_phone) VALUES ('{$firstName}', '{$lastName}',
            '{$email}', '{$password}', '{$homeAddress}', '{$cellPhone}')";


	$result = $conn->query($sql);


	if ($result)
	{
		$_SESSION['success'] = 'User Created Successfully. Please Login!';
		header('Location: login.php');
	}
	else
	{
		$_SESSION['error'] = 'Error in creating user. Please try again!';
		header('Location: signup.php');
	}
	
	$conn->close();
?>