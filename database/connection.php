<?php

	$params = require __DIR__ . '/config.php';

	$conn = new mysqli($params["SERVER_HOST"], $params["USERNAME"], $params["PASSWORD"], $params["DB_NAME"]); 

	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
?>