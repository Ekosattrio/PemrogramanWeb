<?php
include 'koneksi_db.php';

$search_nama = $_GET['nama'] ?? '';
$search_email = $_GET['email'] ?? '';

$sql = "SELECT * FROM pelanggan WHERE 1=1";

if (!empty($search_nama)) {
    $sql .= " AND nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
}
if (!empty($search_email)) {
    $sql .= " AND email LIKE '%" . $conn->real_escape_string($search_email) . "%'";
}

$result = $conn->query($sql);
?>
