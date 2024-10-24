<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "SecretCare";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi->connect_error) {
    die("koneksi gagal" . mysqli_connect_error());
}
?>