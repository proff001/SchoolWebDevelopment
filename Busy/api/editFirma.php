<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$POST = json_decode($json);

	if(!$json) return print("Missing data");
	if(!property_exists($POST, "id")) return print("Missing id");

	$query = "UPDATE `firmaer` SET";

	if(property_exists($POST, "navn")) $query = addSetParam($query, "navn", $POST->navn);
	if(property_exists($POST, "orgnummer")) $query = addSetParam($query, "orgnummer", $POST->orgnummer);
	if(property_exists($POST, "adresse")) $query = addSetParam($query, "adresse", $POST->adresse);
	if(property_exists($POST, "leveringsadresse")) $query = addSetParam($query, "leveringsadresse", strlen($POST->leveringsadresse) > 0 ? $POST->leveringsadresse : 'NULL', strlen($POST->leveringsadresse) > 0 ? true : false);
	if(property_exists($POST, "postnr")) $query = addSetParam($query, "postnr", $POST->postnr);
	if(property_exists($POST, "poststed")) $query = addSetParam($query, "poststed", $POST->poststed);
	if(property_exists($POST, "leverandor")) $query = addSetParam($query, "leverandor", $POST->leverandor, false);

	$query .= " WHERE `id` = $POST->id";

	$data = Query($query);
	echo $data;
?>