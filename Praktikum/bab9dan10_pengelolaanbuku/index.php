<?php include 'proses_index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: form_login.php");
    exit;
}
?>

<?php include 'nav.php'; ?>
<div class="container mt-4">
    <h2>Daftar Buku</h2>

    <form method="get" class="row g-3 mb-4">
        <div class="col-md-5">
            <label class="form-label">Cari Berdasarkan Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku" value="<?php echo htmlspecialchars($search_judul); ?>">
        </div>
        <div class="col-md-3">
            <label class="form-label">Cari Berdasarkan Tahun Terbit</label>
            <input type="number" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?php echo htmlspecialchars($search_tahun); ?>">
        </div>
        <div class="col-md-2 align-self-end">
            <button type="submit" class="btn btn-primary">Cari</button>
        </div>
        <div class="col-md-2 align-self-end">
            <a href="index.php" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= htmlspecialchars($row['Judul']) ?></td>
                <td><?= htmlspecialchars($row['Penulis']) ?></td>
                <td><?= $row['Tahun_Terbit'] ?></td>
                <td>Rp<?= number_format($row['Harga'], 2) ?></td>
                <td>
                    <a href="form_edit.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="proses_hapus.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
