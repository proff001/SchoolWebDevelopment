<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$POST = json_decode($json);

	if(!$json) return print("Missing data");
	if(!property_exists($POST, "fornavn") || !property_exists($POST, "etternavn") || !property_exists($POST, "tittel") || !property_exists($POST, "epost") || !property_exists($POST, "telefon")) return print("Missing parameters");

	$querry = "INSERT INTO `personer` (`fornavn`, `etternavn`, `tittel`, `epost`, `telefon`) VALUES ('$POST->fornavn', '$POST->etternavn', '$POST->tittel', '$POST->epost', '$POST->telefon')";

	if(property_exists($POST, "firma") && $POST->firma > 0) {
		$querry = "INSERT INTO `personer` (`fornavn`, `etternavn`, `tittel`, `epost`, `telefon`, `firma`) VALUES ('$POST->fornavn', '$POST->etternavn', '$POST->tittel', '$POST->epost', '$POST->telefon', $POST->firma)";
	}

	$data = Query($querry);
	echo $data;
?>