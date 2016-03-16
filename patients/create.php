<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="name">Species:</label>
			<select>
				<?php
					foreach ($species as $specie):
				?>
				<option value="<?php echo $specie['id']; ?>"><?php echo $specie['species']; ?></option>
				<?php
					endforeach;
				?>
			</select>
		</div>
		<div>
			<label for="name">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="name">Gender:</label>
			  <input type="radio" name="gender" value="male"> Male<br>
			  <input type="radio" name="gender" value="female"> Female<br> 
			</div>
			<div>
				<label for="name">Client:</label>
				<select name="client">
					<?php 
						foreach ($clients as $client):
					?>
					<option value="<?php echo $client['client_id']; ?>"><?php echo $client['name']; ?></option>
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