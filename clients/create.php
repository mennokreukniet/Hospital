<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New client</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
		<p><a href="index.php">Back to clients</a></p>
<?php
	include "../common/footer.php";
?>