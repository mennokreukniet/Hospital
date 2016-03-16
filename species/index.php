<?php
	require_once "index.logic.php";
	include "../common/header.php";

	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT * FROM species";
	$result = $db->query($query);
	
	$species = $result->fetch_all(MYSQLI_ASSOC);
?>
	<link rel="stylesheet" type="text/css" href="../common/main.css">
	<h1>Species</h1>
	<p class="options"><a href="create.php">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Species</th>
				<th>id</th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($species as $specie):
?>
			<tr>
				<td><?=$specie['species']?></td>
				<td><?=$specie['id']?></td>
				<td class="center"><a href="edit.php?id=<?=$specie['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$specie['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>