<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/=7jquery-ui.1.8.18.custom.js"></script>
</head>
<body>
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" name="NPM" class="form-control col-md-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="Nama" class="form-control col-md-25" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="Tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="Tempat_lahir" class="form-control col-md-9" placeholder="Masukkan Tempat Lahir">
                    </div>

                    <div class="form-group">
                        <label for="Tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="Tanggal_lahir" class="form-control col-md-9" placeholder="Masukkan Tanggal Lahir">
                    </div>

                    <div clsass="form-group">
                        <label for="Jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="Jenis_kelamin" class="form-control col-md-25" placeholder="Masukkan Jenis Kelamin">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="Alamat" class="form-control col-md-25" placeholder="Masukkan Alamat">
                    </div>

                    <div class="form-group">
                        <label for="Kode_pos">Kode Pos</label>
                        <input type="text" name="Kode_pos" class="form-control col-md-9" placeholder="Masukkan Kode Pos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button>
                </form>
            </div>
        </div>    
    </div>

</body>
</html>
<?php
    include "koneksi.php";
    if (isset($_POST['simpan'])) {
            $npm            =$_POST['NPM'];
            $nama           =$_POST['Nama'];
            $tempat_lahir   =$_POST['Tempat_lahir'];
            $tanggal_lahir  =$_POST['Tanggal_lahir'];
            $jenis_kelamin  =$_POST['Jenis_kelamin'];
            $alamat         =$_POST['Alamat'];
            $kode_pos       =$_POST['Kode_pos'];

            mysqli_query($koneksi, "INSERT INTO `mahasiswa` VALUES('',
                '$npm','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$kode_pos'
            )") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5>Silahkan Tunggu, Data Sedang disimpan. . .</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-mahasiswa/data_mahasiswa.php'>";

    }

?>
