<!DOCTYPE html>
<html>
	<head>
		<title>Edit Sitat</title>
		<link rel="stylesheet" href="../../../../style.css">
		<link rel="stylesheet" href="../../../2/Oppgave/style.css">
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
				if(!empty($_POST["sitater"])) {
					$file = fopen("../sitater.txt", "w");
					fwrite($file, $_POST["sitater"]);
					fclose($file);
				}
			}
		?>
		
		<div id="content">
			<div id="container">
				<form action="./edit.php" method="POST">
					<textarea name="sitater" style="width: 800px; height: 600px;"><?php 
						if(filesize("../sitater.txt") > 0) {
							$file = fopen("../sitater.txt", "r");
							
							while(!feof($file)) {
								echo fgets($file);
							};
							
							fclose($file);
						} else {
							echo "Ingen sitater lagret. Trykk på edit for å skrive et sistat.";
						};
					?></textarea>

					<input value="Lagre" type="submit">
				</form>
			</div>
		</div>

		<div id="footer">
			&#169;2021 Thomas Meller Hole
		</div>

		<script>
			if(window.history.replaceState) {
				window.history.replaceState(null, null, window.location.href);
			}
		</script>
	</body>
</html>