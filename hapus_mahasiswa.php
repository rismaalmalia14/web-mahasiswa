<?php
    include "koneksi.php";
    $id = $_GET['NPM'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE NPM='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-mahasiswa/data_mahasiswa.php'>";

?>