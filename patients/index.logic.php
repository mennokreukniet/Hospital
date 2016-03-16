<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patient.patient_name, patient.id, species.species, patient.status, patient.gender, clients.name FROM patient
				INNER JOIN clients ON patient.client = clients.client_id
				INNER JOIN species ON patient.species = species.id";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>