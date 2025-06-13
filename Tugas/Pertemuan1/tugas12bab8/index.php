<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Praktikum BAB 8</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom right, #f5f7fa, #c3cfe2);
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4e73df;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #f8f9fc;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        nav a {
            margin: 0 10px;
            padding: 10px 16px;
            background-color: #e2e6ea;
            color: #343a40;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #4e73df;
            color: white;
        }

        .container {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        form input[type="number"], form input[type="text"] {
            padding: 8px;
            width: 50%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        form input[type="submit"] {
            padding: 8px 16px;
            background-color: #4e73df;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #2e59d9;
        }
    </style>
</head>
<body>

<header>
    <h1>Latihan Praktikum BAB 8</h1>
    <p>Percabangan, Perulangan, dan Include di PHP</p>
</header>

<nav>
    <?php include 'menu.php'; ?>
</nav>

<div class="container">
<?php
if (isset($_GET['soal'])) {
    $soal = $_GET['soal'];
    switch ($soal) {
        case '1':
            include 'switchkendaraan.php';
            break;
        case '2':
            include 'forgenap.php';
            break;
        case '3':
            include 'foreach.php';
            break;
        case '4':
            include 'ternarygenapganjil.php';
            break;
        default:
            echo "<p>Soal tidak ditemukan.</p>";
    }
} else {
    echo "<h3>Selamat datang!</h3><p>Silakan pilih salah satu soal di atas untuk memulai latihan.</p>";
}
?>
</div>

</body>
</html>
