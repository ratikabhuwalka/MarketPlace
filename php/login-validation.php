<?php
	session_start();
	ini_set('display_errors', 1);
	require_once __DIR__ . '/../database/connection.php';

	function errorMessage() {
		$_SESSION["error"] = "Authentication Failed! Please enter valid credentials.";
		header("Location: ../login.php");
	}

		$email_address = $_POST["email_address"];
		$user_password = $_POST["user_password"];
					
		$selectQuery = "SELECT * FROM users where email_address='" . $email_address . "'";
		$result = $conn->query($selectQuery);

		if ($result->num_rows > 0)
		{
			$row = $result->fetch_assoc();
			if ($user_password == $row["user_password"] && $row["isAdmin"])
			{
				$_SESSION['user_logged_in'] = true;
				header('Location: ../products.php');
			}
			else
			{
				errorMessage();
			}
		} 
		else 
		{
			errorMessage();
		}
		
		$conn->close();

?>