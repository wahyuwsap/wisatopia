<?php
session_start();
include 'database.php';

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($query) > 0) {
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password, $user['password'])) {
            $_SESSION['email'] = $user['email'];
            header("Location:/Wisatopia/code/Beranda.html");
            exit(); 
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Email tidak ditemukan!";
    }
}
?>
