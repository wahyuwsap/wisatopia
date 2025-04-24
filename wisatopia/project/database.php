<?php
$host = "localhost";
$user = "root";    // username MySQL kamu
$pass = "";        // password MySQL kamu
$db   = "wisatopia";  // nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
