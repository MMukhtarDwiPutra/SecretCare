<?php
session_start();
session_unset();   // Hapus semua variabel sesi
session_destroy(); // Hancurkan sesi

// Arahkan kembali ke halaman login atau halaman utama
header("Location: ../../index.php");
exit();
?>