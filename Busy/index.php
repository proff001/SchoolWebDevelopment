<!DOCTYPE html>
<html lang="no">
	<head>
		<title>BuSy</title>
		<!-- <link rel="stylesheet" href="style.css"> -->
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script> -->
		<!-- Keeping for when i am developing further to avoid caching -->
		<link rel="stylesheet" href="style.css?<?=filemtime("style.css")?>">
		<script src="script.js" defer></script>
		<?php require './api/query.php' ?>
	</head>
	<body>
		<header>
			<div id="title" class="flexAlignCenter">BuSy Prosject</div>
			<div class="navItem flexAlignCenter"><a href="module/vare/">Vare</a></div>
			<div class="navItem flexAlignCenter"><a href="module/kontakt/">Kontakt</a></div>
			<div class="navItem flexAlignCenter active">Hjem</div>
		</header>

		<div id="content" class="flexAlignCenter">
			<div id="produktListe" class="flexAlignCenter">
				<?php
					$data = Query("SELECT `produkter`.*, `firmaer`.`navn` as 'Firma' FROM `produkter`, `firmaer` WHERE `firmaer`.`id` = `produkter`.`firma`", false);

					foreach ($data as $value) {
						echo "<div class='product'>";
						echo "<div class='flexAlignCenter'>" . $value["navn"] . "</div>";
						echo "<div>" . $value["beskrivelse"] . "</div>";
						echo "<div>Leverandør: " . $value["Firma"] . "</div>";
						echo "<div  class='flexAlignCenter'>" . $value["prisUt"] . " kr</div>";
						echo "</div>";
					}
				?>
			</div>
		</div>

		<footer class="flexAlignCenter">&#169;2022 Thomas Meller Hole</footer>
	</body>
</html>