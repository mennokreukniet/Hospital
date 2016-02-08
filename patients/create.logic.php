<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		
		// Prepare query and execute
		$query = "insert into patient (name, species, status, gender) values ('$name','$species','$status', '$gender')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;
?>