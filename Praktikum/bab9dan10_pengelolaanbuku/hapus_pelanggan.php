<?php
include 'koneksi_db.php';

if (!isset($_GET['ID'])) {
    header('Location: daftarpelanggan.php');
    exit;
}

$id = (int)$_GET['ID'];

// Hapus pelanggan berdasarkan ID
$sql = "DELETE FROM pelanggan WHERE ID = $id";

if ($conn->query($sql)) {
    header('Location: daftarpelanggan.php');
    exit;
} else {
    echo "Gagal menghapus data: " . $conn->error;
}
