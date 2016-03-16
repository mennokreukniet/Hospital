<?php
	$db = new mysqli('localhost','root','','hospital');

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
	} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
		$queryClients = "select * from clients";
		$querySpecies = "select * from species";


		$resultClients = $db->query($queryClients);
		$resultSpecies = $db->query($querySpecies);

		$clients = $resultClients->fetch_all(MYSQLI_ASSOC);
		$species = $resultSpecies->fetch_all(MYSQLI_ASSOC);	
	}
?>