<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}
echo "Halo, selamat datang " . $_SESSION['email'] . " di Wisatopia!";
?>
