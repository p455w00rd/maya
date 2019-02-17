<?php
include'../koneksi.php';
$nama_kegiatan=$_POST['nama_kegiatan'];
$jenis_kegiatan=$_POST['jenis_kegiatan'];
$tgl=$_POST['tgl'];
$nama_peje=$_POST['nama_peje'];
mysqli_query ($koneksi,"INSERT INTO kegiatan VALUES ('','$nama_kegiatan','$jenis_kegiatan','$tgl','$nama_peje')");
header("location:kegiatan.php")
?>