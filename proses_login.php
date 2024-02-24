<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $valid_username = "admin";
    $valid_password = "admin";

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        header("Location: backend.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Login gagal. Periksa kembali username dan password.";
        header("Location: login.php");
        exit();
    }
}
