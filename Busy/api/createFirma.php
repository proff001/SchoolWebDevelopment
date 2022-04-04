<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$POST = json_decode($json);

	if(!$json) return print("Missing data");
	if(!property_exists($POST, "navn") || !property_exists($POST, "adresse") || !property_exists($POST, "postnr") || !property_exists($POST, "poststed")) return print("Missing parameters");

	$data = Query("INSERT INTO `firmaer` (`navn`, `adresse`, `postnr`, `poststed`) VALUES ('" . $POST->navn . "', '" . $POST->adresse . "', '" . $POST->postnr . "', '" . $POST->poststed . "')");
	echo $data;
?>