<!DOCTYPE html>
<html>
<head><title>Latihan Diskon UKT</title></head>
<body>
<h2>Hitung Diskon UKT Mahasiswa</h2>
<form method="post" action="">
    NPM: <input type="text" name="npm"><br>
    Nama: <input type="text" name="nama"><br>
    Prodi: <input type="text" name="prodi"><br>
    Semester: <input type="number" name="semester"><br>
    Biaya UKT: <input type="number" name="ukt"><br>
    <input type="submit" value="Hitung Diskon">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];
    $diskon = 0;

    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon = 15;
        }
    }

    $potongan = $ukt * ($diskon / 100);
    $bayar = $ukt - $potongan;

    echo "<hr>";
    echo "NPM: $npm <br>";
    echo "NAMA: $nama <br>";
    echo "PRODI: $prodi <br>";
    echo "SEMESTER: $semester <br>";
    echo "BIAYA UKT: Rp. " . number_format($ukt, 0, ',', '.') . "<br>";
    echo "DISKON: $diskon% <br>";
    echo "YANG HARUS DIBAYAR: Rp. " . number_format($bayar, 0, ',', '.');
}
?>
</body>
</html>
