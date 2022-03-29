<!DOCTYPE html>
<html lang="no">
	<head>
		<title>BuSy</title>
		<!-- <link rel="stylesheet" href="style.css"> -->
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!-- Keeping for when i am developing further to avoid caching -->
		<link rel="stylesheet" href="style.css?<?=filemtime("style.css")?>"/>
		<script src="./script.js" defer></script>
	</head>
	<body>
		<header>
			<div id="title" class="flexAlignCenter">BuSy Prosject</div>
			<div class="navItem flexAlignCenter"><a href="module/kontakt/">Kontakt</a></div>
			<div class="navItem flexAlignCenter active">Hjem</div>
		</header>

		<div id="content">
			<button id="test">
				Test
			</button>
		</div>

		<footer>&#169;2022 Thomas Meller Hole</footer>
	</body>
</html>