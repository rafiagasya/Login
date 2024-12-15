<?php
$servername = "localhost";
$username = "root";  // atau username yang sesuai
$password = "";  // atau password yang sesuai
$dbname = "login";  // nama database sesuai phpMyAdmin

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} 

?>
