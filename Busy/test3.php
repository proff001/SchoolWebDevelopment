<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<?php
			$SQL = new mysqli("localhost", "root", "", "busy");
			$firma = $_POST["firma"];
			$navn = $_POST["navn"];
			$adresse = $_POST["adresse"];
			$postnr = $_POST["postnr"];
			$poststed = $_POST["poststed"];

			$query = "UPDATE `firmaer` SET `navn` = '$navn', `adresse` = '$adresse', `postnr` = '$postnr', `poststed` = '$poststed' WHERE `id` = $firma";

			$SQL->query($query);
		?>
	</body>
</html>