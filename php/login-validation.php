<?php
	session_start();
	ini_set('display_errors', 1);
	require_once __DIR__ . '/../database/connection.php';

	function errorMessage() {
		header("Location: ../login.php");
	}

	function validInput($email, $password) {
		if(empty($email) || empty($password)) {
			$_SESSION["error"] = "Email and password cannot be empty";
			return false;
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$_SESSION["error"] = "Invalid email format";
			return false;
		}

		return true;
	}

		$email_address = trim($_POST["email_address"]);
		$user_password = trim($_POST["user_password"]);

		if(!validInput($email_address, $user_password)) {
			errorMessage();
		} else {
			$selectQuery = "SELECT * FROM users where email_address='" . $email_address . "'";
			$result = $conn->query($selectQuery);
			if ($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				if ($user_password == $row["user_password"])
				{
					$_SESSION['user_logged_in'] = true;
					header('Location: ../products.php');
				}
				else
				{
					$_SESSION["error"] = "Authentication Failed! Please enter valid credentials.";
					errorMessage();
				}
			} 
			else 
			{
				$_SESSION["error"] = "Email does not exists!";
				errorMessage();
			}
		}
		
		$conn->close();

?>