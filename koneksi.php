<?php
$host = 'localhost'; 
$db = 'booking_db'; 
$user = 'root';      
$password = '';      


$conn = new mysqli($host, $user, $password, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8");

?>
