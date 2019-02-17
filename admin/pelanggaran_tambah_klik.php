<?php
include'../koneksi.php';
$jenis_pelanggaran=$_POST['jenis_pelanggaran'];
$nama_pelanggaran=$_POST['nama_pelanggaran'];
$tgl_pelanggaran=$_POST['tgl_pelanggaran'];
$id_santri=$_POST['id_santri'];
$ket_pelanggaran=$_POST['ket_pelanggaran'];

mysqli_query ($koneksi,"INSERT INTO pelanggaran VALUES ('','$jenis_pelanggaran','$nama_pelanggaran','$tgl_pelanggaran','$id_santri','$ket_pelanggaran')");
header("location:pelanggaran.php")
?>