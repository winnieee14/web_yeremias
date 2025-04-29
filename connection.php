<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "web_yeremias";

$conn = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>