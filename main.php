<?php
include "database.php";
session_start();


if (isset($_SESSION['is_login'])) {
    header("location: dashboard.php");
    exit;
}

$login_message = "";
$register_message = "";

// LOGIN    
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username_login']);
    $password = $_POST['password_login'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username dan Password tidak boleh kosong!');</script>";
    } else {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            if (password_verify($password, $data['password'])) {
                $_SESSION['username'] = $data['username'];
                $_SESSION['is_login'] = true;
                header("location: dashboard.php");
                exit; 
            } else {
                echo "<script>alert('Password salah!');</script>";
            }
        } else {
            echo "<script>alert('Akun tidak ditemukan!');</script>";
        }
    }
}



    // REGISTER     
    if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];


    if (empty($username) || empty($password) || empty($konfirmasi_password)) {
        echo "<script>alert('Semua kolom wajib diisi!');</script>";
    } 

    else if ($password !== $konfirmasi_password) {
        echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
    } 

    else {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";
            if ($db->query($sql)) {
                echo "<script>alert('Registrasi Berhasil! Silakan Login'); window.location='main.php';</script>";
                exit;
            }
        } catch (mysqli_sql_exception $e) {
            echo "<script>alert('Username sudah terdaftar, gunakan username lain!');</script>";
        }
    }
}

include "main.html";
?>