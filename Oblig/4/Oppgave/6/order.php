<!DOCTYPE html>
<html>
	<head>
		<title>Oblig 4 Opgpave 6</title>
		<link rel="stylesheet" href="../style.css">
		<link rel="stylesheet" href="../../../../style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<style>
			#container {
				padding: 4vh;
				flex-direction: column;
			}
			
			ul {
				padding: 0.5vh 0vh 1vh 2vh;
			}
			
			ol {
				list-style-type: decimal;
				list-style-position: inside;
			}
			
			ol img {
				padding: 0vh 0vh 1vh 2vh;
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
				<?php
					$name = $address = $type = "";
					$extra = $delivery = false;
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if(!empty($_POST["name"])) $name = safeInput($_POST["name"]);
						if(!empty($_POST["address"])) $address = safeInput($_POST["address"]);
						if(!empty($_POST["delivery"])) $delivery = ((safeInput($_POST["delivery"])) == 1) ? true : false;
						if(!empty($_POST["type"])) $type = safeInput($_POST["type"]);
						if(!empty($_POST["extra"])) $extra = ((safeInput($_POST["extra"])) == 1) ? true : false;
						
						if(!preg_match("/^[a-å A-Å \s .\-]+$/", $name) || !preg_match("/^[a-å A-Å 0-9 \s .,\-]+$/", $address) || !checkType($type)) {
							echo '<div id="title">Feil</div>';
							echo 'Det var en feil i formatet i bestilling din!<br>Vennligst prøv å bestille på nytt.<br><a href="./">Tilbake til bestilling</a>';
						} else {
							echo '<div id="title">Bestilling</div>';
							echo "<div>";
							echo "Takk for din bestilling $name.<br>";
							echo "Du har bestillt en $type";
							echo ($extra) ? " med ekstra ost.<br>" : ".<br>";
							echo ($delivery) ? "Leveres til $address." : "Hentes hos oss i EnGate 5, 1528 Moss.";
							echo "</div>";
						};
					};

					function checkType($value) {
						return ($value == "Pepperoni" || $value == "King of the King" || $value == "Ansjos og Ananas");
					};

					function safeInput($text) {
						$text = trim($text);
						$text = stripslashes($text);
						$text = htmlspecialchars($text);
						return $text;
					};
				?>
			</div>
		</div>

		<div id="footer">
			&#169;2021 Thomas Meller Hole
		</div>
	</body>
</html>