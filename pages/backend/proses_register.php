<?php 
include "koneksi.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if($confirm_password != $password){
        $_SESSION['error_message'] = 'Password baru dan confirm password yang dimasukan tidak sama!';
        header('Location: ../register.php');
        exit();
    }else{
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $koneksi->query($query);

        if ($result && $result->num_rows > 0){
            $_SESSION['error_message'] = "Username yang anda masukan sudah terdaftar! silahkan cari username lain!";
            header('Location: ../register.php');
            exit();
        }else{
            $query = "INSERT INTO users (email, username, password) VALUES('$email','$username','$password')";
        
            if($koneksi->query($query)){
                $koneksi->Close();
                $_SESSION['error_message'] = "Akun anda berhasil didaftarkan! silahkan login!";
                header("Location:../register.php");
                exit();
            }else{
                echo "gagal" . mysqli_error($koneksi);
            }
        }
    }
}
?>