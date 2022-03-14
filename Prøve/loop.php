<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ABC</title>
	</head>
	<body style="height:100vh; display:flex; align-items:center; justify-content:center;">
		<?php
			$arr = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Æ', 'Ø', 'Å');

			foreach($arr as $index => $value) {
				echo $index + 1 . ": $value <br>";
			}
		?>
	</body>
</html>