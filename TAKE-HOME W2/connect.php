<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan"; // Ganti dengan nama database Anda
$port = 3306;

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
