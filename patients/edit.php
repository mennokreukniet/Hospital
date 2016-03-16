<?php

	require_once "edit.logic.php";
	include "../common/header.php";
?>
	<h1>Edit patiënt</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patient['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$patient['patient_name']?>">
		</div>
		<div>
			<label for="name">Species:</label>
			<select name ="species">
			<?php
				foreach ($species as $specie) {
				?>
					<option <?php if ($specie['id'] == $patient['species']) { echo "selected=\"true\""; } ?> value="<?php echo $specie['id']?>"><?php echo $specie['species']; ?></option>
				<?php
				}
			?>
			</select>
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
					foreach ($clients as $client){
				?>
				<option value="<?php echo $client['client_id']?>"><?php echo $client['name']; ?></option>
				<?php
					}
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