<?php
	require_once "index.logic.php";
	include "../common/header.php";

	$connection = new mysqli('localhost','root','','hospital');
	
	$sql = "SELECT * FROM clients";

	$result = $connection->query($sql);

?>
	<link rel="stylesheet" type="text/css" href="../common/main.css">
	<h1>Clients</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>id</th>
			</tr>
		</thead>
		</tbody>
<?php
		foreach ($clients as $client):
?>
			<tr>
				<td><?=$client['name']?></td>
				<td><?=$client['client_id']?></td>
				<td class="center"><a href="edit.php?id=<?=$client['client_id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$client['client_id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>