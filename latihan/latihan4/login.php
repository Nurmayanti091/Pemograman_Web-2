<?php

include_once 'dashboard.php';
session_start();

// Mendefinisikan username dan password yang benar
$correct_username = 'nurmayanti';
$correct_password = '21 juli 2005';

// Mengambil input dari form
$input_username = $_POST['user'];
$input_password = $_POST['password'];

// Membandingkan input dengan username dan password yang benar
if ($input_username == $correct_username && $input_password == $correct_password) {
    // Jika login berhasil, simpan status login ke session
    $_SESSION['username'] = $input_username;
    
    // Redirect ke halaman dashboard
    header("Location: dashboard.php");
    exit;

}

?>
