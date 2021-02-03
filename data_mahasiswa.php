<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data  Mahasiswa</title> 
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-ui-1.8.18.custoom .js"></script>
</head>
<body>
    <div class="container col-md-10"> 
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
            </div>
                <div class="card-body">
                    <a href="index.php" class="btn btn-primary">Tambah Data</a>

                    <form action="" method="POST" class="input-group mb-3">
                    <button type="submit" class="btn btn-outline-primary" name="submit"> Cari</button>
                    <input type="text" name="cari" placeholder="cari nama" class="form-control">
                    </form>

                    <table class="table table-bordered">
                        <tr>
                            <th>IDMAHASISWA</th>
                            <th>NPM</th>
                            <th>NAMA</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR</th>
                            <th>JENIS KELAMIN</th>
                            <th>ALAMAT</th>
                            <th>KODE POS</th>
                        </tr>
                        <?php
                            include "koneksi.php";
                            $no = 1;
                            if(isset($_POST['submit'])){
                                $cari=$_POST['cari'];
                                $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nama LIKE '$cari%'");                            
                            }else{
                                $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY Nama DESC");
                            }
                            while($data=mysqli_fetch_array($tampil))
                            {
                        ?> 
                        <tr>
                            <td> <?php echo $no++; ?> </td>
                            <td> <?php echo $data['NPM']; ?> </td>
                            <td> <?php echo $data['Nama']; ?> </td>
                            <td> <?php echo $data['Tempat_lahir']; ?> </td>
                            <td> <?php echo $data['Tanggal_lahir']; ?> </td>
                            <td> <?php echo $data['Jenis_kelamin']; ?> </td>
                            <td> <?php echo $data['Alamat']; ?> </td>
                            <td> <?php echo $data['Kode_pos']; ?> </td>
                            <td>
                                <a href="edit_mahasiswa.php?NPM=<?php echo $data['NPM']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="hapus_mahasiswa.php?NPM=<?php echo $data['NPM']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                                <?php } ?>
                    </table>
                </div>
        </div>
     </div>

</body>
</html>
