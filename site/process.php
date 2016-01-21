<html>
<head>
	<title>Hello</title>
</head>
<body>
	<?php
	$name = $_POST["username"];
	$pass = $_POST["password"];
	if($pass!=="varun") {
		echo "YOU THIEF!!!";
	} else {
		echo "Thank god :) ".$name;
		$variable = "value";
		$url = "http://localhost:8000/index.php";
		header( "Location: $url" );
	}
	?>
</body>
</html>