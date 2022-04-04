<!DOCTYPE html>
<html>
	<head>
		<title>Oblig 6 Oppgave 1</title>
		<link rel="stylesheet" href="../../../../style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<style>
			#container {
				padding: 4vh;
				display: flex;
				flex-direction: column;
				gap: 12px;
				min-width: 600px;
				max-width: 800px;
			}
			
			.button {
				width: 48px;
				height: 32px;
				border: 1px solid gainsboro;
				border-radius: 5px;
				display: flex;
				align-items: center;
				justify-content: center;
				text-decoration: none;
				transition: all linear .05s;
			}

			.button:hover  {
				color: rgba(103, 62, 207, 0.8);
				border-color: rgba(103, 62, 207, 0.8);
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
		
		<div id="content">
			<div id="container">
				<div style="font-weight: bold; font-size: 2vh;">Sitater:</div>

					<?php
						if(filesize("../sitater.txt") > 0) {
							$file = fopen("../sitater.txt", "r");
							
							while(!feof($file)) {
								echo "<p>" . fgets($file) . "</p>";
							}
							
							fclose($file);
						} else {
							echo "<p>Ingen sitater lagret. Trykk på edit for å skrive et sistat.</p>";
						}
					?>

				<a class="button" href="./edit.php">Edit</a>
			</div>
		</div>

		<div id="footer">
			&#169;2021 Thomas Meller Hole
		</div>
	</body>
</html>