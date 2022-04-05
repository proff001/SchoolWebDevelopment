<?php
	if($_SERVER["REQUEST_METHOD"] != "POST") return;

	require './query.php';

	$json = file_get_contents('php://input');
	$POST = json_decode($json);

	if(!$json) return print("Missing data");
	if(!property_exists($POST, "id")) return print("Missing parameter");

	$data = Query("DELETE FROM `personer` WHERE `id` = $POST->id");
	echo $data;
?>