<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require '../query.php';

	$json = file_get_contents('php://input');
	$query = "SELECT * FROM personer";

	if($json) {
		$POST = json_decode($json);

		if(property_exists($POST, "id")) $query = addWhereParam($query, "id", $POST->id);
		if(property_exists($POST, "firma")) $query = addWhereParam($query, "firma", $POST->firma);
		if(property_exists($POST, "fornavn")) $query = addWhereParam($query, "fornavn", $POST->fornavn);
		if(property_exists($POST, "etternavn")) $query = addWhereParam($query, "etternavn", $POST->etternavn);
		if(property_exists($POST, "epost")) $query = addWhereParam($query, "epost", $POST->epost);
		if(property_exists($POST, "telefon")) $query = addWhereParam($query, "telefon", $POST->telefon);
	};

	$data = Query($query);
	echo $data;
?>