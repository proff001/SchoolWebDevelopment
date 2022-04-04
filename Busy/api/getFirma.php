<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$query = "SELECT * FROM `firmaer`";

	if($json) {
		$POST = json_decode($json);

		if(property_exists($POST, "id")) addParam($query, "`id` = " .  $POST->id);
		if(property_exists($POST, "navn")) addParam($query, "`navn` = " .  $POST->navn);
		if(property_exists($POST, "adresse")) addParam($query, "`adresse` = " .  $POST->adresse);
		if(property_exists($POST, "postnr")) addParam($query, "`postnr` = " .  $POST->postnr);
		if(property_exists($POST, "poststed")) addParam($query, "`poststed` = " .  $POST->poststed);
		if(property_exists($POST, "leverandor")) addParam($query, "`leverandor` = " .  $POST->leverandor);
	};

	$data = Query($query);
	echo $data;
?>