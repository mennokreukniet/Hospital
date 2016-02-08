<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM clients";
	$result = $db->query($query);
	
	$clients = $result->fetch_all(MYSQLI_ASSOC);
?>