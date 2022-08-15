<?php
session_start();
include 'koneksi.php';

// agar orang lain tidak bisa langsung masuk ke halamanan beranda
if ($_SESSION['start_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB ONLINE | Administrator</title>
    <link rel="stylesheet" type="text/css" href="gaya.css">
</head>

<body>
    <header>
        <h1><a href="beranda.php" style="text-decoration: none; color:black"> Admin PSB</a></h1>
        <ul>
            <li><a href="beranda.php" style="color: black;">Beranda</a></li>
            <li><a href="data-peserta.php" style="color: black;"> Data Peserta</a></li>
            <li><a href="keluar.php" style="color: black;">Keluar</a></li>
        </ul>
    </header>

    <section class="content">
        <h2>Beranda</h2>
        <div class="box">
            <h3><?php echo $_SESSION['nama'] ?>, Selamat datang di PSB Online SMK YAPIN 02 SETU.</h3>
        </div>
    </section>
</body>

</html>