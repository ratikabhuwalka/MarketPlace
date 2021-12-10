<?php

//Open file
$contactsHandler = fopen ("utils/contacts.txt", "r") or die("Unable to open file!");


echo "<table border='0' cellpadding='30' cellspacing='0'>";

//Read all contacts from text file
while (!feof ($contactsHandler)) {

		//Read one contact
		$contact = fgets($contactsHandler, 4096);

		// Splitting the contact with delimiter comma(,)
		$contactsArray = preg_split ("/\,/", $contact); 

		echo "<tr><td style='text-align:center;'>";
	  	echo "<h4 style='font-weight: normal;'>" . current($contactsArray) . "</h4>";
	  	echo "</td>";

	  	echo "<td style='text-align:center;'>";
	  	echo "<h4 style='font-weight: normal;'>" . next($contactsArray) . "</h6>";
	  	echo "</td>";

	  	echo "</tr>";
		
}
echo "</table>";

// Close Contacts handler
fclose ($contactsHandler);

?>