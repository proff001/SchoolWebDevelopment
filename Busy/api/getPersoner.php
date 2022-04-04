<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$query = "SELECT * FROM `personer`";

	if($json) {
		$POST = json_decode($json);

		if(property_exists($POST, "id")) addParam($query, "`id` = " .  $POST->id);
		if(property_exists($POST, "firma")) addParam($query, "`firma` = " .  $POST->firma);
		if(property_exists($POST, "fornavn")) addParam($query, "`fornavn` = " .  $POST->fornavn);
		if(property_exists($POST, "etternavn")) addParam($query, "`etternavn` = " .  $POST->etternavn);
		if(property_exists($POST, "epost")) addParam($query, "`epost` = " .  $POST->epost);
		if(property_exists($POST, "telefon")) addParam($query, "`telefon` = " .  $POST->telefon);
	};

	$data = Query($query);
	echo $data;
?>