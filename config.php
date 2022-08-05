
<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "test";

$mysqli = new mysqli($serverName, $userName, $password, $dbName);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    echo("Failed");
    exit();
}
if ($mysqli->connect_errno) {
    echo "fallo";
}
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $mysqli;
?>