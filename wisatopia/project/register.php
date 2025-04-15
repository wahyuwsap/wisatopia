<?php
include 'database.php';

if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($check) > 0) {
        // Redirect back to sign up with error (optional)
        echo "<script>alert('Email sudah terdaftar!'); window.location.href='/Wisatopia/code/SignIn.html';</script>";
        exit();
    } else {
        $sql = "INSERT INTO users (email, fname, lname, password) VALUES ('$email', '$fname', '$lname', '$password')";
        if(mysqli_query($conn, $sql)) {
            // Redirect to SignIn.html
            header("Location:/Wisatopia/code/SignIn.html"); 
            exit(); 
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
