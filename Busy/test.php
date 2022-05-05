<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<?php require './api/query.php' ?>
	</head>
	<body>
		<form action="test2.php" method="POST">
			<select name="firma">
				<option value="0">Velg firma</option>
				<?php
					$SQL = new mysqli("localhost", "root", "", "busy");

					$res = $SQL->query("SELECT `id`, `navn` FROM `firmaer`");

					while($row = $res->fetch_assoc()) {
						echo "<option value='" . $row["id"] . "'>" . $row["navn"] . "</option>";
					}
				?>
			</select>
			<input type="submit">
		</form>
	</body>
</html>