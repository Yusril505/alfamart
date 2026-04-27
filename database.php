<?php
$hostname = "localhost";
$username = "root";
$password = "yaudahbanh";
$database_name = "Login";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>