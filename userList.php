<?php
	if(isset($_POST["query"]))
	{
		ini_set('display_errors', 1);
		require_once __DIR__ . '/database/connection.php';
		$request = $_POST["query"];
		$selectQuery = "SELECT * FROM users
		WHERE first_name LIKE '%".$request."%'
		OR email_address LIKE '%".$request."%'
		OR last_name LIKE '%".$request."%' 
		OR home_phone LIKE '%".$request."%'
		OR cell_phone LIKE '%".$request."%'
		ORDER BY id DESC";
		$result = $conn->query($selectQuery);
		$html = '';
		$html .= '
			<div class="container">
			<div class="col-md-12">
			<div class="col-md-12 table-responsive">
			<table class="table table-bordered table-striped table-hover">
			    <thead>
			        <tr class="bg-success">
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Email Address</th>
			            <th>Home Address</th>
			            <th>Home Phone</th>
			            <th>Cell Phone</th>
			        </tr>
			    </thead>
			    <tbody>
			';
		    $count = $result-> num_rows;
			if($count>0)
			{
	            $n  =   1;
	        	while($row = $result->fetch_assoc())
	        	{
	        		$data[] = $row["first_name"];
				    $data[] = $row["last_name"];
				    $data[] = $row["email_address"];
				    $data[] = $row["home_address"];
				    $data[] = $row["home_phone"];
				    $data[] = $row["cell_phone"];
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
			}
			else 
			{
				$html .= '
			        <tr>
			            <td colspan="6" align="center"><strong>No Record(s) Found!</strong></td>
			        </tr>
			    ';
		    }
		$conn->close();
		$html .= '
		    </tbody></table></div></div></div>
		';
		if(isset($_POST['typehead_search']))
		{
		  echo $html;
		}
		else
		{
		  $data = array_unique($data);
		  echo json_encode($data);
		}
	}
?>