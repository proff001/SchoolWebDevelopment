<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$POST = json_decode($json);

	if(!$json) return print("Missing data");
	if(!property_exists($POST, "navn") || !property_exists($POST, "adresse") || !property_exists($POST, "postnr") || !property_exists($POST, "poststed") || !property_exists($POST, "leverandor")) return print("Missing parameters");

	$leverandor = $POST->leverandor ? 1 : 0;

	$querry = "INSERT INTO `firmaer` (`navn`, `adresse`, `postnr`, `poststed`, `leverandor`) VALUES ('$POST->navn', '$POST->adresse', '$POST->postnr', '$POST->poststed', $leverandor)";

	if(property_exists($POST, "leveringsadresse")) {
		$querry = "INSERT INTO `firmaer` (`navn`, `adresse`, `postnr`, `poststed`, `leverandor`, `leveringsadresse`) VALUES ('$POST->navn', '$POST->adresse', '$POST->postnr', '$POST->poststed', $leverandor, '$POST->leveringsadresse')";
	}

	$data = Query($querry);
	echo $data;
?>