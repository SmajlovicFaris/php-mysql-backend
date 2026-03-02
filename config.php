<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "php_mysql_backend";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Greška u konekciji: " . $conn->connect_error);
}
?>