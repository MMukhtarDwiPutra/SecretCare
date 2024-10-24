<?php 
include "koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (email, username, password) VALUES('$email','$username','$password')";
    
    if($koneksi->query($query)){
        $koneksi->Close();
        header("Location:../../index.html");
        exit();
    }else{
        echo "gagal" . mysqli_error($koneksi);
    }
}
    
?>