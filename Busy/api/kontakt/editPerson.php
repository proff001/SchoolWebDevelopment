<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require '../query.php';

	$json = file_get_contents('php://input');
	$POST = json_decode($json);

	if(!$json) return print("Missing data");
	if(!property_exists($POST, "id")) return print("Missing id");

	$query = "UPDATE `personer` SET";

	if(property_exists($POST, "fornavn")) $query = addSetParam($query, "fornavn", $POST->fornavn);
	if(property_exists($POST, "etternavn")) $query = addSetParam($query, "etternavn", $POST->etternavn);
	if(property_exists($POST, "tittel")) $query = addSetParam($query, "tittel", $POST->tittel);
	if(property_exists($POST, "epost")) $query = addSetParam($query, "epost", $POST->epost);
	if(property_exists($POST, "telefon")) $query = addSetParam($query, "telefon", $POST->telefon);
	if(property_exists($POST, "firma")) $query = addSetParam($query, "firma", $POST->firma == 0 ? 'NULL' : $POST->firma, $POST->firma == 0 ? false : true);

	$query .= " WHERE `id` = $POST->id";

	$data = Query($query);
	echo $data;
?>