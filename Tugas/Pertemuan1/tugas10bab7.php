<!DOCTYPE html>
<html>
<head><title>Latihan Nilai</title></head>
<body>
<h2>Input Nilai Mahasiswa</h2>
<form method="post" action="">
    Nama: <input type="text" name="nama"><br>
    Nilai: <input type="number" name="nilai"><br>
    <input type="submit" value="Proses">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $predikat = "";
    $status = "";

    if ($nilai >= 85) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 75) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 65) {
        $predikat = "C";
        $status = "Lulus";
    } else {
        $predikat = "D";
        $status = "Tidak Lulus";
    }

    echo "<hr>";
    echo "Nama: $nama <br>";
    echo "Nilai: $nilai <br>";
    echo "Predikat: $predikat <br>";
    echo "Status: $status";
}
?>
</body>
</html>
