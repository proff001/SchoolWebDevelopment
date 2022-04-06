<?php
	function addParam($query, $param) {
		if(str_contains($query, "WHERE")) $query .= ", " . $param;
		else $query .= " WHERE " . $param;
	}

	function addSetParam($query, $param, $value, $string = true) {
		$qry = $string ? " `$param` = '$value'" : " `$param` = $value";

		if(!str_contains($query, "=")) $query .= "$qry";
		else $query .= ",$qry";

		return $query;
	}

	function Query($query) {
		mysqli_report(MYSQLI_REPORT_STRICT);

		try {
			$SQL = new mysqli("localhost", "root", "", "busy");

			try {
				if(str_contains($query, "INSERT") || str_contains($query, "UPDATE") || str_contains($query, "DELETE")) {
					return $SQL->query($query) === TRUE;
				} else {
					$res = $SQL->query($query);
					$data = array();

					while($row = $res->fetch_assoc()) {
						$data[] = $row;
					}
	
					return json_encode($data);
				}
			} catch(Exception $e) {
				return('Query failed: ' . $e->getMessage());
			}
		} catch(Exception $e) {
			return('Connection failed: ' . $e->getMessage());
		}
	}
?>