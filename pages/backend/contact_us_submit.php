<?php 
include "koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $country = $_POST['country'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact_us (first_name, last_name, email, phone_number, country, message) VALUES('$first_name','$last_name', '$email', '$phone_number', '$country', '$message')";
    
    if($koneksi->query($query)){
        $koneksi->Close();
        echo "berhasil query";
        header("Location:../contact_us.html");
        exit();
    }else{
        echo "gagal" . mysqli_error($koneksi);
    }
}
    
?>