<?php
session_start();
include 'koneksi.php';

// agar orang lain tidak bisa langsung masuk ke halamanan beranda
if ($_SESSION['start_login'] != true) {
    echo '<script>window.location="detail-peserta.php"</script>';
}

$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($peserta);
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
        <h2>Detail Peserta</h2>
        <div class="box">
            <table class="table-data" border="0">
                <h2>Data Siswa</h2>
                <tr>
                    <td>Kode Pendaftaran</td>
                    <td>:</td>
                    <td><?php echo $p->id_pendaftaran ?></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td><?php echo $p->th_ajaran ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?php echo $p->jurusan ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $p->nm_peserta ?></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td><?php echo $p->telepon ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $p->tmp_lahir . ', ' . $p->tgl_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $p->jk ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $p->agama ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $p->almt_peserta ?></td>
                </tr>
            </table>
            <table class="table-data" border="0">
                <h2>Data Orang Tua</h2>
                <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <td><?php echo $p->nm_ayah ?></td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td><?php echo $p->nm_ibu ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan Ayah</td>
                    <td>:</td>
                    <td><?php echo $p->pkr_ayah ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan Ibu</td>
                    <td>:</td>
                    <td><?php echo $p->pkr_ibu ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir Ayah</td>
                    <td>:</td>
                    <td><?php echo $p->thn_ayah ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir Ibu</td>
                    <td>:</td>
                    <td><?php echo $p->thn_ibu ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $p->almt_ortu ?></td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>