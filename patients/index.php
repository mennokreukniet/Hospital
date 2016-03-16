<?php
	require_once "index.logic.php";
	include "../common/header.php";
	//var_dump($patients);
?>
	<link rel="stylesheet" type="text/css" href="../common/main.css">
	<h1>Patiënts</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th>Gender</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['patient_name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['status']?></td>
				<td><?=$patient['name']?></td>
				<td><?=$patient['gender']?></td>
				<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>