<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    //ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter saja dari sebelah kanan

    $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
    $d = mysqli_fetch_object($getMaxId);
    $generateId = 'p' . date('y') . sprintf("%05s", $d->id + 1);
    // echo $generateId;

    // proses insert
    $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
			'" . $generateId . "',
			'" . date('Y-m-d') . "',
			'" . $_POST['th_ajaran'] . "',
			'" . $_POST['jurusan'] . "',
			'" . $_POST['nm'] . "',
			'" . $_POST['tmp_lahir'] . "',
			'" . $_POST['tgl_lahir'] . "',
			'" . $_POST['jk'] . "',
			'" . $_POST['agama'] . "',
			'" . $_POST['alamat'] . "',
            '" . $_POST['telepon'] . "',
            '" . $_POST['nm_ayah'] . "',
            '" . $_POST['nm_ibu'] . "',
            '" . $_POST['pkr_ayah'] . "',
            '" . $_POST['pkr_ibu'] . "',
            '" . $_POST['thn_ayah'] . "',
            '" . $_POST['thn_ibu'] . "',
            '" . $_POST['almt_ortu'] . "'
		)");

    if ($insert) {
        # code...
        echo '<script>window.location="berhasil.php?id=' . $generateId . '"</script>';
    } else {
        echo 'Gagal ' . mysqli_error($conn);
    }
}


?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSB ONLINE</title>
    <link rel="stylesheet" type="text/css" href="gaya.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <section class="box-formulir">
        <h2 style="color: white; background-color: #2b8042;padding: 5px 3px;">FORMULIR PENDAFTARAN SMK YAPIN 02 SETU
        </h2>

        <form action="" method="post">

            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2021/2022" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="jurusan">
                                <option value="">--pilih--</option>
                                <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                                <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif
                                </option>
                                <option value="Teknik Komputer Dan Jaringan">Teknik Komputer Dan Jaringan</option>
                                <option value="Akutansi">Akutansi</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>

            <h3 style="color: white;background-color: #2b8042;padding: 5px 3px;">Data Diri Calon Siswa</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="input-control" required="Data tidak boleh kosong!">
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control" required="">
                        </td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="telepon" class="input-control" required="">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control" required="">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="Laki-laki" required=""> Laki-laki
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="Perempuan" required=""> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="agama" required="">
                                <option value="">--pilih--</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat" required=""></textarea>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" class="btn-daftar" name="submit" value="Daftar Sekarang">
                        </td>
                    </tr> -->
                </table>
            </div>

            <h3 style="color: white; background-color: #2b8042; padding: 5px 3px;">Data Orang Tua</h3>
            <div class="box">
                <table border="0" class="table-form">
                    <tr>
                        <td>Nama Ayah</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm_ayah" class="input-control" required="">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Ibu</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm_ibu" class="input-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ayah</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="pkr_ayah" class="input-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Ibu</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="pkr_ibu" class="input-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir Ayah</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="thn_ayah" class="input-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir Ibu</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="thn_ibu" class="input-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="almt_ortu" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" class="btn-daftar" name="submit" value="Daftar Sekarang">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        <a href="logout-peserta.php" class="lg-peserta">Loguot</a>
    </section>
</body>

</html>