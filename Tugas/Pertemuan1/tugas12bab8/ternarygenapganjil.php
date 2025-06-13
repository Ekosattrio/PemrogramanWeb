<form method="post">
    Masukkan Angka: <input type="number" name="angka">
    <input type="submit" value="Cek">
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "Angka $angka adalah $hasil.";
}
?>
