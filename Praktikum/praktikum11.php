
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $hari = "jumat";

    switch ($hari) {
        case 'senin':
            echo "hari pertama kerja!! keren";
            break;

        case 'jumat':
            echo "solat jumat";
            break;

        default:
            echo "hari biasa";
            break;
    }

    echo "<br><br>";

    for ($i = 1; $i <= 5; $i++) {
        echo "angka ke-" . $i . "<br>";
    }
    ?>
</body>
</html>

