<?php

	require_once "edit.logic.php";
	include "../common/header.php";

	$db = new mysqli('localhost','root','','hospital');

	$query = "select * from clients";

	$result = $db->query($query);
	
	$clients = $result->fetch_all(MYSQLI_ASSOC);

?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" value="<?=$patient['species']?>">
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"><?=$patient['status']?></textarea>
		</div>
		<div>
			<label for="name">Gender:</label>
 					 <input type="radio" name="gender" value="male"> Male
 					 <input type="radio" name="gender" value="female"> Female
		</div>
		<div>
			<label for="name">Client:</label>
			<select name="client">
				<?php 
					foreach ($clients as $client):
				?>
				<option value="<?php echo $client['name']?>"><?php echo $client['name']; ?></option>
				<?php
					endforeach;
				?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
	<p><a href="index.php">Back to patients</a></p>
<?php
	include "../common/footer.php";
?>