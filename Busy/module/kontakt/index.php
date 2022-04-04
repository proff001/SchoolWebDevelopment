<!DOCTYPE html>
<html lang="no">
	<head>
		<title>BuSy</title>
		<!-- <link rel="stylesheet" href="/Busy/style.css"> -->
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!-- Keeping for when i am developing further to avoid caching -->
		<link rel="stylesheet" href="/Busy/style.css?<?=filemtime("/Busy/style.css")?>"/>
		<link rel="stylesheet" href="/Busy/lib/nice-select2/nice-select2.css">
		<script src="/Busy/lib/nice-select2/nice-select2.js"></script>
		<script src="./script.js" defer></script>
	</head>
	<body>
		<header>
			<div id="title" class="flexAlignCenter">BuSy Prosject</div>
			<div class="navItem flexAlignCenter active">Kontakt</div>
			<div class="navItem flexAlignCenter"><a href="/Busy">Hjem</a></div>
		</header>

		<div id="content" class="flexAlignCenter">
			<div id="forms">
				<form id="lagFirma">
					<div id="title">Lag et nytt firma</div>

					Navn
					<input type="text">
					Adresse
					<input type="text">
					Leveringsadresse
					<input type="text">
					Postnr
					<input type="text" min="4" max="5">
					Poststed
					<input type="text">
					Leverandør
					<input type="checkbox">

					<button type="submit">Lag firma</button>
				</form>

				<form id="lagPerson">
					<div id="title">Legg til en ny preson</div>

					Fornavn
					<input type="text" name="fornavn">
					Etternavn
					<input type="text" name="etternavn">
					Tittel
					<input type="text" name="tittel">
					Epost
					<input type="text" name="epost" min="4" max="5">
					Telefon
					<input type="text" name="telefon">
					Firma
					<select name="firma" id="firmaSelector" style="display: none;"></select>

					<button type="submit">Legg til person</button>
				</form>
			</div>
		</div>

		<footer class="flexAlignCenter">&#169;2022 Thomas Meller Hole</footer>
	</body>
</html>