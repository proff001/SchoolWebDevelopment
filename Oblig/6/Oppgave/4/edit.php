<!DOCTYPE html>
<html>
	<head>
		<title>Legg til poengsum</title>
		<link rel="stylesheet" href="../../../../style.css">
		<link rel="stylesheet" href="../../../4/Oppgave/style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<style>
			#container {
				padding: 4vh;
			}
		</style>
	</head>
	<body>
		<div id="header">
			<div id="title" class="flexAlignCenter">Thomas's Websted</div>
			<div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="https://github.com/proff001">Github</a></div>
			<div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../../../">Obliger</a></div>
			<div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../../../">Hjem</a></div>
		</div>

		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				if(!empty($_POST["name"]) && !empty($_POST["score"])) {
					$_POST["score"] = 1 * $_POST["score"];
					$file = fopen("./score.txt", "a");
					fwrite($file, $_POST["name"] . ";" . $_POST["score"] . 1);
					fclose($file);
				}
			}
		?>
		
		<div id="content">
			<div id="container">
				<div id="title">Legge til poengsum</div>
				<form action="./edit.php" method="POST" style="padding-top: 12px;">
					<div style="width:100%;">
						Navn:
						<input type="text" name="name" style="font-size: 1.8vh;" require>
					</div>

					<div style="width:100%;">
						Poeng:
						<input type="number" name="score" min="0" max="100" style="font-size: 1.8vh;" require>
					</div>

					<input value="Legg til" type="submit">
				</form>
			</div>
		</div>

		<div id="footer">
			&#169;2021 Thomas Meller Hole
		</div>

		<script>
			if ( window.history.replaceState ) {
				window.history.replaceState(null, null, window.location.href);
			}
		</script>
	</body>
</html>