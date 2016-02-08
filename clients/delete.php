<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$clients['id']?>">
			<label for="name">Name:</label>
			<span><?=$clients['name']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
		<p><a href="index.php">Back to clients</a></p>
<?php
	include "../common/footer.php";
?>