<html>
<head>
	<title>Hello World</title>
</head>
<body>
	<?php
$servername = "127.0.0.1";
$username = "root";
$password = "opera";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
</body>
</html>
