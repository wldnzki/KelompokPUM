<?php
// Konfigurasi database
$host = "localhost";   // default XAMPP host
$user = "root";        // default user MySQL XAMPP
$pass = "";            // default password kosong di XAMPP
$db = "organisasi";  // nama database kamu

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>