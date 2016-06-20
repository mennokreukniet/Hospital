<?php
	$db = new mysqli('localhost','root','','hospital');

	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		// Prepare data for insertion
		$patient_name = $db->escape_string($_POST["patient_name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$client = $db->escape_string($_POST["client"]);

		
		// Prepare query and execute
		$query = "INSERT INTO patient (patient_name, species, status, gender, client) VALUES ('$patient_name', $species, '$status', '$gender', $client)";
		$result = $db->query($query);

		var_dump($query);
		var_dump($_POST);
		var_dump($species);

	    // Tell the browser to go back to the index page.
	    //header("Location: ./");
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