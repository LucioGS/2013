<html>
<head>
</head>
<body>
<?php
	$numero = intval($_POST["num"]);
	$listanumeros = [];
	while ($numero > 0) {
		$listanumeros[] = $numero;
		$numero = $numero - 1;	
	}
	var_dump($listanumeros);
?>
</body>
</html>

