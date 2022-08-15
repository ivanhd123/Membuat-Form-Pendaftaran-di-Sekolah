<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB ONLINE</title>
    <link rel="stylesheet" type="text/css" href="gaya.css">
</head>

<body>
    <section class="box-formulir">
        <h2 style="background-color: #2b8042; color:#fff; padding: 5px 3px;">Pendaftaran Berhasil</h2>
        <div class="box">
            <h4>Kode pendaftaran anda <?php echo $_GET['id'] ?></h4>
            <a href="cetak-bukti.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Pendaftaran</a>
        </div>
    </section>
</body>

</html>