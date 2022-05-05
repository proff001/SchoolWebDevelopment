<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require '../query.php';

	$json = file_get_contents('php://input');
	$query = "SELECT * FROM `produkter`";

	if($json) {
		$POST = json_decode($json);

		if(property_exists($POST, "id")) $query = addWhereParam($query, "id", $POST->id);
		if(property_exists($POST, "navn")) $query = addWhereParam($query, "navn", $POST->navn);
		if(property_exists($POST, "beskrivelse")) $query = addWhereParam($query, "beskrivelse", $POST->beskrivelse);
		if(property_exists($POST, "prisIn")) $query = addWhereParam($query, "prisIn", $POST->prisIn);
		if(property_exists($POST, "prisUt")) $query = addWhereParam($query, "prisUt", $POST->prisUt);
		if(property_exists($POST, "firma")) $query = addWhereParam($query, "firma", $POST->firma);
	};

	$data = Query($query);
	echo $data;
?>