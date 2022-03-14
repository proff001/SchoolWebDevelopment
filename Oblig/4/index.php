<!DOCTYPE html>
<html>
	<head>
		<title>Oblig 4</title>
		<link rel="stylesheet" href="../../style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<style>
			#container {
				padding: 4vh;
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
			<div class="menuItem flexAlignCenter active"><a class="flexAlignCenter" href="../">Obliger</a></div>
			<div class="menuItem flexAlignCenter"><a class="flexAlignCenter" href="../../">Hjem</a></div>
		</div>
		
		<div id="content">
			<div id="container">
				<ol>
					<li><a href="./Oppgave/1">Oppgave 1</a></li>
					<ol><img src="./img/oppg1.png" alt="Bilde av php koden til oppgave 1"></ol>
					
					<li><a href="./Oppgave/2">Oppgave 2</a></li>
					<ol><img src="./img/oppg2.png" alt="Bilde av php koden til oppgave 2"></ol>
					
					<li><a href="./Oppgave/3">Oppgave 3</a></li>
					<ol><img src="./img/oppg3.png" alt="Bilde av php koden til oppgave 3"></ol>
					
					<li>>Oppgave 4</li>
					<ol class="qAndA">
						<?php
							$arr = array(10, 20, 30, 40, 50, 60 ,70, 80 ,90, 100);
							
							echo "<li>print_r</li>";
							echo "<ul>";
							print_r($arr);
							echo "</ul>";

							echo "<li>Shuffle</li>";
							shuffle($arr);
							echo "<ul>";
							print_r($arr);
							echo "</ul>";

							echo "<li>Stigende</li>";
							asort($arr);
							echo "<ul>";
							print_r($arr);
							echo "</ul>";

							echo "<li>Motsatt</li>";
							echo "<ul>";
							print_r(array_reverse($arr));
							echo "</ul>";
						?>
					</ol>
					<ol><img src="./img/oppg4.png" alt="Bilde av php koden til oppgave 4"></ol>

					<li>Oppgave 5</li>
					<ol class="qAndA">
						<?php
							$arr = array("Sander", "Linus", "Sebastian", "Thomas", "Marius", "Tobias", "Erling", "Luan", "Jovan", "Szymon", "Oscar", "Steinar", "Fredrik");
							$arrLenght = count($arr);

							echo "<li>foreach</li>";
							echo "<ul>";
							foreach($arr as $index => $value) {
								echo "<li>$value</li>";
							};
							echo "</ul>";

							echo "<li>while</li>";
							echo "<ul>";
							$index = 0;
							while($index < $arrLenght) {
								echo "<li>$arr[$index]</li>";
								$index ++;
							};
							echo "</ul>";
							
							echo "<li>for</li>";
							echo "<ul>";
							for($i = 0; $i < $arrLenght; $i++) {
								echo "<li>$arr[$i]</li>";
							}
							echo "</ul>";
						?>
					</ol>
					<ol><img src="./img/oppg5.png" alt="Bilde av php koden til oppgave 5"></ol>
					
					<li><a href="./Oppgave/6">Oppgave 6</a></li>
					<ol><img src="./img/oppg6.png" alt="Bilde av php koden til oppgave 6"></ol>
				</ol>
			</div>
		</div>

		<div id="footer">
			&#169;2021 Thomas Meller Hole
		</div>
	</body>
</html>