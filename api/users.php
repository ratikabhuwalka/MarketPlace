<?php
ini_set('display_errors', 1);
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if($_SERVER["REQUEST_METHOD"] != "GET") {
	http_response_code(422);
	echo json_encode("Method Not Supported");
	exit();
}

require_once __DIR__ . '/../database/connection.php';
$selectQuery = "SELECT * FROM users
	ORDER BY id DESC";
$result = $conn->query($selectQuery);

$users=array();
$users["data"]=array();

while($row = $result->fetch_assoc())
{
	$user=array(
        "first_name" => $row["first_name"],
        "last_name" => $row["last_name"],
        "email_address" => $row["email_address"],
        "home_address" => $row["home_address"],
        "home_phone" => $row["home_phone"],
        "cell_phone" => $row["cell_phone"]
    );

    array_push($users["data"], $user);
 }

// set response code - 200 OK
http_response_code(200);

// show products data in json format
echo json_encode($users);


$conn->close();
?>