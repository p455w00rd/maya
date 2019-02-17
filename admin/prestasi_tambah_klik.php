<?php
include'../koneksi.php';
$jenis_prestasi=$_POST['jenis_prestasi'];
$nama_prestasi=$_POST['nama_prestasi'];
$juara_ke=$_POST['juara_ke'];
$tingkat=$_POST['tingkat'];
$tgl=$_POST['tgl'];
$id_santri=$_POST['id_santri'];
$ket_prestasi=$_POST['ket_prestasi'];

mysqli_query ($koneksi,"INSERT INTO prestasi VALUES ('','$jenis_prestasi','$nama_prestasi','$juara_ke','$tingkat','$tgl','$id_santri','$ket_prestasi')");
header("location:prestasi.php")
?>