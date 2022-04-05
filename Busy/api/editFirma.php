<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$POST = json_decode($json);

	if(!$json) return print("Missing data");
	if(!property_exists($POST, "id")) return print("Missing id");

	$query = "UPDATE `firma` SET";

	if(property_exists($POST, "navn")) $query .= " `navn` = '$POST->navn'";
	if(property_exists($POST, "adresse")) $query .= ", `adresse` = '$POST->adresse'";
	if(property_exists($POST, "leveringsadresse")) $query .= ", `leveringsadresse` = '$POST->leveringsadresse'";
	if(property_exists($POST, "postnr")) $query .= ", `postnr` = '$POST->postnr'";
	if(property_exists($POST, "poststed")) $query .= ", `poststed` = '$POST->poststed'";
	if(property_exists($POST, "leverandor")) $query .= ", `leverandor` = '$POST->leverandor'";

	$query .= " WHERE `id` = $POST->id";

	$data = Query($query);
	echo $data;
?>