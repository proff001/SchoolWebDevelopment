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
		<form action="test3.php" method="POST">
			<?php
				$SQL = new mysqli("localhost", "root", "", "busy");
				$firma = $_POST["firma"];
				$res = $SQL->query("SELECT * FROM `firmaer` WHERE `id` = $firma");

				$row = $res->fetch_assoc();

				echo "<input type='hidden' name='firma' value='" . $row["id"] . "'>";
				echo "<input type='input' name='navn' value='" . $row["navn"] . "'></br>";
				echo "<input type='input' name='adresse' value='" . $row["adresse"] . "'>";
				echo "<input type='input' name='postnr' value='" . $row["postnr"] . "'>";
				echo "<input type='input' name='poststed' value='" . $row["poststed"] . "'>";
			?>
			<input type='submit'>;
		</form>
	</body>
</html>