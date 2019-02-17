<?php
include'../koneksi.php';
$id_santri=$_POST['id_santri'];
$id_pj=$_POST['id_pj'];
$id_kegiatan=$_POST['id_kegiatan'];
$tgl_absensi=$_POST['tgl_absensi'];
$ket_absensi=$_POST['ket_absensi'];

mysqli_query ($koneksi,"INSERT INTO absensi VALUES ('','$id_santri','$id_pj,'$id_kegiatan','$tgl_absensi','$ket_absensi')");
header("location:absensi.php")
?>