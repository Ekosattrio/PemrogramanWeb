<?php
include 'koneksi_db.php';

if (!isset($_GET['ID'])) {
    header('Location: daftarpelanggan.php');
    exit;
}

$id = (int)$_GET['ID'];

// Ambil data pelanggan berdasarkan ID
$sql = "SELECT * FROM pelanggan WHERE ID = $id";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    echo "Data pelanggan tidak ditemukan.";
    exit;
}

$pelanggan = $result->fetch_assoc();

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $conn->real_escape_string($_POST['Nama']);
    $alamat = $conn->real_escape_string($_POST['Alamat']);
    $email = $conn->real_escape_string($_POST['Email']);

    $update_sql = "UPDATE pelanggan SET 
                    Nama = '$nama',
                    Alamat = '$alamat',
                    Email = '$email'
                   WHERE ID = $id";

    if ($conn->query($update_sql)) {
        header('Location: daftarpelanggan.php');
        exit;
    } else {
        $error = "Gagal update data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h2>Edit Pelanggan</h2>

    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" id="Nama" name="Nama" class="form-control" required value="<?= htmlspecialchars($pelanggan['Nama']) ?>">
        </div>
        <div class="mb-3">
            <label for="Alamat" class="form-label">Alamat</label>
            <textarea id="Alamat" name="Alamat" class="form-control" required><?= htmlspecialchars($pelanggan['Alamat']) ?></textarea>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" id="Email" name="Email" class="form-control" required value="<?= htmlspecialchars($pelanggan['Email']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="daftarpelanggan.php" class="btn btn-secondary ms-2">Batal</a>
    </form>

</div>
</body>
</html>
