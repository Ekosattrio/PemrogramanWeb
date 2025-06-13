<?php
session_start();
include "koneksi_db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Sanitasi input
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Cek ke database
$sql = "SELECT * FROM pelanggan WHERE ussername='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Login sukses
    $data = mysqli_fetch_assoc($result);
    $_SESSION['login'] = true;
    $_SESSION['id'] = $data['ID'];
    $_SESSION['nama'] = $data['Nama'];
    $_SESSION['username'] = $data['ussername'];

    // Redirect ke index.php
    header("Location: index.php");
} else {
    echo "Login gagal. Username atau password salah.";
}
?>
