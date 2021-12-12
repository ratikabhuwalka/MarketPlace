<?php
	session_start();
	ini_set('display_errors', 1);
	require_once __DIR__ . '/../database/connection.php';

	function errorMessage() {
		header("Location: ../signup.php");
	}

	function validInput($firstName, $lastName, $email, $password, $homeAddress, $cellPhone){
		if(empty($firstName) || empty($lastName)|| empty($email)|| empty($password)|| empty($homeAddress) || empty($cellPhone)) {
			$_SESSION["error"] = "Fields cannot be empty";
			return false;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$_SESSION["error"] = "Invalid email format";
			return false;
		}

		if(strlen($password)<6) {
			$_SESSION["error"] = "You need to have minimum of 6 characters";
			return false;
		}

		return true;
	}

	$firstName = trim($_POST["firstName"]);
	$lastName = trim($_POST["lastName"]);
	$email = trim($_POST["email"]);
	$homeAddress = trim($_POST["homeAddress"]);
	$password = trim($_POST["password"]);
	$cellPhone = trim($_POST["cellPhone"]);

	if(!validInput($firstName, $lastName, $email, $password, $homeAddress, $cellPhone)) {
		errorMessage();
	} else {
		$sql = "INSERT INTO users ( first_name, last_name, email_address, user_password, home_address, cell_phone) VALUES ('{$firstName}', '{$lastName}',
		'{$email}', '{$password}', '{$homeAddress}', '{$cellPhone}')";

		$result = $conn->query($sql);

		if ($result)
		{
		$_SESSION['success'] = 'User Created Successfully. Please Login!';
		header('Location: ../login.php');
		}
		else
		{
		$_SESSION['error'] = 'Error in creating user. Please try again!';
		header('Location: ../signup.php');
}
	}
	
	$conn->close();
?>