<?php
// Mulai sesi
include "koneksi.php";

// Contoh validasi login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Ganti dengan validasi Anda (contoh sederhana)
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $koneksi->query($query);

    // Cek apakah ada hasil dari query
    if ($result && $result->num_rows > 0) {
         // Jika berhasil login
        $_SESSION['logged_in'] = true;
        header('Location: ../../index.php');
        exit();
    } else {
         // Jika gagal login
        $_SESSION['error_message'] = 'Username atau password salah.';
        header('Location: ../login.php');
        exit();
    }
}
?>