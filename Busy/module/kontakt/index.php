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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bluzky/nice-select2@2.0.0/dist/css/nice-select2.css">
		<script src="https://cdn.jsdelivr.net/gh/bluzky/nice-select2@2.0.0/dist/js/nice-select2.js"></script>
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
				<form class="form" id="lagFirma">
					<div id="title">Legg til et nytt firma</div>

					Navn
					<input type="text" name="navn" required>
					Adresse
					<input type="text" name="adresse" required>
					Leveringsadresse
					<input type="text" name="leveringsadresse">
					Postnr
					<input type="text" name="postnr" minlength="4" minlength="5" required>
					Poststed
					<input type="text" name="poststed" required>
					Leverandør
					<input type="checkbox" name="leverandor">

					<button type="submit">Legg til firma</button>
				</form>

				<form class="form" id="lagPerson">
					<div id="title">Legg til en ny preson</div>

					Fornavn
					<input type="text" name="fornavn" required>
					Etternavn
					<input type="text" name="etternavn" required>
					Tittel
					<input type="text" name="tittel" required>
					Epost
					<input type="text" name="epost" required>
					Telefon
					<input type="text" name="telefon" minlength="8" maxlength="8" required>
					Firma
					<select name="firma" id="firmaSelector" style="display: none;">
						<option selected value="0">Velg et firma</option>
					</select>

					<button type="submit">Legg til person</button>
				</form>

				<div class="form" id="finnFirma">
					<div id="title">Finn firma informasjon</div>

					Firma
					<select id="firmaSelector2" style="display: none;">
						<option selected value="0">Velg et firma</option>
					</select>

					Adresse:
					<span id="firmaAdresse">Ingen firma valg</span>

					Leveringsadresse:
					<span id="firmaLeveringsadresse">Ingen firma valg</span>

					Postnr:
					<span id="firmaPostnr">Ingen firma valg</span>

					Poststed:
					<span id="firmaPoststed">Ingen firma valg</span>

					Leverandør:
					<span id="firmaLeverandor">Ingen firma valg</span>

					<button id="firmaDelete">Slett firma</button>
				</div>

				<div class="form" id="finnPerson">
					<div id="title">Finn person informasjon</div>

					Navn
					<select id="personSelector" style="display: none;">
						<option selected value="0">Velg en person</option>
					</select>

					Tittel:
					<span id="personTittel">Ingen person valg</span>

					Epost:
					<span id="personEpost">Ingen person valg</span>

					Telefon:
					<span id="personTelefon">Ingen person valg</span>

					Firma:
					<span id="personFirma">Ingen person valg</span>

					<button id="personDelete">Slett person</button>
				</div>

				<form class="form" id="editFirma">
					<div id="title">Rediger et firma</div>

					Firma
					<select name="firma" id="firmaSelector3" style="display: none;">
						<option selected value="0">Velg et firma</option>
					</select>

					Navn
					<input type="text" name="navn" id="firmaEditNavn">
					Adresse
					<input type="text" name="adresse" id="firmaEditAdresse">
					Leveringsadresse
					<input type="text" name="leveringsadresse" id="firmaEditLeveringsadresse">
					Postnr
					<input type="text" name="postnr" minlength="4" minlength="5" id="firmaEditPostnr">
					Poststed
					<input type="text" name="poststed" id="firmaEditPoststed">
					Leverandør
					<input type="checkbox" name="leverandor" id="firmaEditLeverandor">

					<button type="submit">Rediger firma</button>
				</form>
			</div>
		</div>

		<footer class="flexAlignCenter">&#169;2022 Thomas Meller Hole</footer>
	</body>
</html>