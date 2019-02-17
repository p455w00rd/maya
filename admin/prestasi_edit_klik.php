<?php
 include '../koneksi.php';
 $jenis_prestasi = $_POST ['jenis_prestasi'];
 $nama_prestasi = $_POST ['nama_prestasi'];
 $juara_ke = $_POST ['juara_ke'];
 $tingkat=$_POST['tingkat'];
 $tgl=$_POST['tgl'];
 $id_santri=$_POST['id_santri'];
 $ket_prestasi=$_POST['ket_prestasi'];
 
 
 mysqli_query($koneksi,"UPDATE prestasi SET jenis_prestasi='$jenis_prestasi', nama_prestasi='$nama_prestasi', juara_ke='$juara_ke', tingkat='$tingkat', tgl='$tgl',id_santri=,'$id_santri', ket_prestasi='$ket_prestasi' where id_prestasi='$id'");

 header("location:prestasi.php"); 
?>