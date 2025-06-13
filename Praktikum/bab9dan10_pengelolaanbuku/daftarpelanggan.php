<?php
include 'koneksi_db.php'; // Ganti nama file koneksi sesuai milikmu

// Ambil nilai filter jika ada
$search_Nama = $_GET['Nama'] ?? '';
$search_Email = $_GET['Email'] ?? '';

// Query SQL untuk ambil data pelanggan
$sql = "SELECT * FROM pelanggan WHERE 1=1";

if (!empty($search_Nama)) {
    $sql .= " AND Nama LIKE '%" . $conn->real_escape_string($search_Nama) . "%'";
}
if (!empty($search_Email)) {
    $sql .= " AND Email LIKE '%" . $conn->real_escape_string($search_Email) . "%'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include 'nav.php'; ?>

<body class="container mt-4">

    <h2 class="mb-4">Daftar Pelanggan</h2>

    <form method="GET" class="row g-3 mb-4">
        <div class="col-auto">
            <input type="text" name="Nama" class="form-control" placeholder="Cari Nama" value="<?= htmlspecialchars($search_Nama) ?>">
        </div>
        <div class="col-auto">
            <input type="text" name="Email" class="form-control" placeholder="Cari Email" value="<?= htmlspecialchars($search_Email) ?>">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Cari</button>
            <a href="daftarpelanggan.php" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    <a href="form_tambah_pelanggan.php" class="btn btn-success mb-3">Tambah Pelanggan</a>

    <table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <?php
                $ID = $row['ID'] ?? '';
                $nama = $row['Nama'] ?? '';
                $Alamat = $row['Alamat'] ?? '';
                $Email = $row['Email'] ?? '';
            ?>
            <tr>
                <td><?= htmlspecialchars($ID) ?></td>
                <td><?= htmlspecialchars($nama) ?></td>
                <td><?= htmlspecialchars($Alamat) ?></td>
                <td><?= htmlspecialchars($Email) ?></td>
                <td>
                    <a href="form_edit_pelanggan.php?ID=<?= $ID ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="hapus_pelanggan.php?ID=<?= $ID ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">Data tidak ditemukan</td>
        </tr>
    <?php endif; ?>
    </tbody>
    </table>

</body>
</html>
