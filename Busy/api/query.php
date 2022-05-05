<?php
	function addWhereParam($query, $param, $value, $isString = true) {
		$qry = $isString ? "`$param` = '$value'" : "`$param` = $value";

		if(!str_contains($query, "WHERE")) $query .= "WHERE $qry";
		else $query .= " AND $qry";

		return $query;
	}

	function addSetParam($query, $param, $value, $isString = true) {
		$qry = $isString ? " `$param` = '$value'" : " `$param` = $value";

		if(!str_contains($query, "=")) $query .= "$qry";
		else $query .= ",$qry";

		return $query;
	}

	function Query($query, $json = true) {
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
	
					return $json ? json_encode($data) : $data;
				}
			} catch(Exception $e) {
				return('Query failed: ' . $e->getMessage());
			}
		} catch(Exception $e) {
			return('Connection failed: ' . $e->getMessage());
		}
	}
?>