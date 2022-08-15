<?php
session_start();
include 'koneksi.php';

if ($_SESSION['start_login'] != true) {
    echo '<script>window.location="detail-peserta.php"</script>';
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
            <li><a href="data-peserta.php" style="color: black;">Data Peserta</a></li>
            <li><a href="keluar.php" style="color: black;">Keluar</a></li>
        </ul>
    </header>

    <section class="content">
        <h2>Data Peserta</h2>
        <div class="box">
            <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                    while ($row = mysqli_fetch_array($list_peserta)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['id_pendaftaran'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td>
                            <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> ||
                            <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>"
                                onclick="return confirm('Apakah anda yakin ingin menghapus')">Hapus</a>
                        </td>
                    </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>