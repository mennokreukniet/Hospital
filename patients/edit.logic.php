<?php
	$connection = new mysqli('localhost','root','','hospital');

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$patient = NULL;
		if (isset($_GET['id'])) {
			// Get Patient for id
			$sql = "SELECT * FROM clients";
			$result = $connection->query($sql);
		    $clients = $result->fetch_all(MYSQLI_ASSOC);

			$sql = "SELECT * FROM species";
			$result = $connection->query($sql);
		    $species= $result->fetch_all(MYSQLI_ASSOC);

		    $id = $connection->escape_string($_GET["id"]);
		    
			$sql = "SELECT * FROM patient where id=$id";
			$result = $connection->query($sql);
		    $patient = $result->fetch_assoc();
		
		}
		if ($patient == NULL) {
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		}
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		$db = new mysqli('localhost','root','','hospital');

		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species = $db->escape_string($_POST["species"]);
		$status = $db->escape_string($_POST["status"]);
		$gender = $db->escape_string($_POST["gender"]);
		$client = $db->escape_string($_POST["client"]);
		
		// Prepare query and execute
		$query = "UPDATE patient SET patient_name='$name', species=$species, status='$status', client=$client, gender='$gender' WHERE id=$id";
		$result = $db->query($query);
		var_dump($query);
		var_dump($gender);
		var_dump($_POST);
    	// Tell the browser to go back to the index page.
    	//header("Location: ./");
    	exit();
	}
?>