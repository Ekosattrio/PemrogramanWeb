
<?php
// Konstanta untuk pajak
define("PAJAK", 0.10);

// Array harga barang
$barang = array(
    "Keyboard" => 150000
);

// Variabel jumlah beli
$jumlah_beli = 2;

// Ambil nama barang dan harga satuan
$nama_barang = "Keyboard";
$harga_satuan = $barang[$nama_barang];

// Hitung total harga sebelum pajak
$total_sebelum_pajak = $harga_satuan * $jumlah_beli;

// Hitung pajak
$pajak = $total_sebelum_pajak * PAJAK;

// Hitung total bayar
$total_bayar = $total_sebelum_pajak + $pajak;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian (Dengan Array)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .kotak {
            border: 1px solid #000;
            padding: 20px;
            width: fit-content;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="kotak">
        <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
        <hr>
        <p>Nama Barang: <?= $nama_barang ?></p>
        <p>Harga Satuan: Rp <?= number_format($harga_satuan, 0, ',', '.') ?></p>
        <p>Jumlah Beli: <?= $jumlah_beli ?></p>
        <p>Total Harga (Sebelum Pajak): Rp <?= number_format($total_sebelum_pajak, 0, ',', '.') ?></p>
        <p>Pajak (10%): Rp <?= number_format($pajak, 0, ',', '.') ?></p>
        <p><strong>Total Bayar: Rp <?= number_format($total_bayar, 0, ',', '.') ?></strong></p>
    </div>
</body>
</html>
>