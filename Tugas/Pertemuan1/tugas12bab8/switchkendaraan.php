<form method="post">
    Jumlah Roda: <input type="number" name="roda">
    <input type="submit" value="Cek">
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];
    switch ($roda) {
        case 1:
            echo "Jenis kendaraan: Sepeda Sirkus";
            break;
        case 2:
            echo "Jenis kendaraan: Motor";
            break;
        case 3:
            echo "Jenis kendaraan: bajai";
            break;
        case 4:
            echo "Jenis kendaraan: Mobil";
            break;
        case 6:
            echo "Jenis kendaraan: Truk";
            break;
        default:
            echo "Jenis kendaraan tidak dikenali.";
    }
}
?>
