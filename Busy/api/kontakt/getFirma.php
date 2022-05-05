<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require '../query.php';

	$json = file_get_contents('php://input');
	$query = "SELECT * FROM `firmaer`";

	if($json) {
		$POST = json_decode($json);

		if(property_exists($POST, "id")) $query = addWhereParam($query, "id", $POST->id);
		if(property_exists($POST, "navn")) $query = addWhereParam($query, "navn", $POST->navn);
		if(property_exists($POST, "adresse")) $query = addWhereParam($query, "adresse", $POST->adresse);
		if(property_exists($POST, "postnr")) $query = addWhereParam($query, "postnr", $POST->postnr);
		if(property_exists($POST, "poststed")) $query = addWhereParam($query, "poststed", $POST->poststed);
		if(property_exists($POST, "leverandor")) $query = addWhereParam($query, "leverandor", $POST->leverandor);
	};

	$data = Query($query);
	echo $data;
?>