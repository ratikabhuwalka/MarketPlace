<?php
	ini_set('display_errors', 1);
	function getCompanyUsers() {
		$ch = curl_init();
	    $headers = array(
	    'Accept: application/json',
	    'Content-Type: application/json',
	    );
	    curl_setopt($ch, CURLOPT_URL, 'http://gradtechie.me/display_users.php');
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET' );
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    $gradTechieResponse = curl_exec ($ch);

	    echo "<h3>Grad Techie Users</h3>";
		echo $gradTechieResponse;

		curl_setopt($ch, CURLOPT_URL, 'http://mylampstack.com/users.php');
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET' );
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    $myLampStackResponse = curl_exec ($ch);

	   	echo "<br><h3>My Lamp Stack Users</h3>";

	    $str = strchr($myLampStackResponse, "</tr>");
	    echo $str;

	    curl_setopt($ch, CURLOPT_URL, 'http://info.ratikabhuwalka.me/Books_Booze/get_user.php');
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET' );
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    $booksBoozeResponse = curl_exec ($ch);

	   	echo "<br><h3>Books_Booze Users</h3>";

	    $str = strchr($booksBoozeResponse, "<table");
	    $filter = explode("<p>", $str);

	    echo $filter[0];

		curl_close ($ch);

	}
	require_once __DIR__ . '/database/connection.php';
	$selectQuery = "SELECT * FROM users
	ORDER BY id DESC";
	$result = $conn->query($selectQuery);
	$html = '';
	$html .= '
		<div class="container">
		<div class="col-md-12">
		<h2>Dont Be Trashy! Users</h2>
		<div class="col-md-12 table-responsive">
		<table class="table table-bordered table-striped table-hover">
		    <thead>
		        <tr class="bg-success">
		            <th>First Name</th>
		            <th>Last Name</th>
		            <th>Email Address</th>
		            <th>Home Address</th>
		            <th>Home Phone</th>
		            <th>Cell Phone</th>';
	$html .='            
	        </tr>
	    </thead>
	    <tbody>
	';
	while($row = $result->fetch_assoc())
	{
		$html .= '
        <tr>
            <td>'.$row['first_name'].'</td>
            <td>'.$row['last_name'].'</td>
            <td>'.$row['email_address'].'</td>
            <td>'.$row['home_address'].'</td>
            <td>'.$row['home_phone'].'</td>
 			<td>'.$row['cell_phone'].'</td>
        </tr>
        ';
    }

	$conn->close();
	$html .= '
	    </tbody></table></div>
	';

	echo $html;

	    // Curl other company users
    if($_SERVER['REQUEST_URI'] == "/allCompaniesUsers.php")
	{
		getCompanyUsers();
	}

	$html .= '
		</div></div>
	';
?>