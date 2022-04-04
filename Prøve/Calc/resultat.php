<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kalkulator Resultat</title>
	</head>
	<body style="height:100vh; display:flex; align-items:center; justify-content:center;">
		<?php
			$num1 = $num2 = $res = 0;
			$operator = 'pluss';

			if($_SERVER["REQUEST_METHOD"] == "POST") {
				if(!empty($_POST["num1"]) && !empty($_POST["num2"]) && !empty($_POST["op"])) {
					$num1 = $_POST["num1"] * 1;
					$num2 = $_POST["num2"] * 1;
					
					if($_POST['op'] == "plus" || $_POST['op'] == "minus" || $_POST['op'] == "multi" || $_POST['op'] == "divide" || $_POST["op"] == "powerOf") {
						$operator = $_POST['op'];
					}

					switch($operator) {
						case "pluss":
							$res = $num1 + $num2;
							$operator = '+';
							break;
						case "minus":
							$res = $num1 - $num2;
							$operator = '-';
							break;
						case "multi":
							$res = $num1 * $num2;
							$operator = '*';
							break;
						case "divide":
							$res = $num1 / $num2;
							$operator = '/';
							break;
						case "powerOf":
							$res = $num1 ** $num2;
							$operator = "^";
							break;
					}

					echo "Resultatet av $num1 $operator $num2 = $res";
				}
			}
		?>
	</body>
</html>