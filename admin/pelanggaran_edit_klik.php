<?php
 include '../koneksi.php';
 $id = $_POST ['id'];
 $jenis_pelanggaran = $_POST ['jenis_pelanggaran'];
 $nama_pelanggaran = $_POST ['nama_pelanggaran'];
 $tgl_pelanggaran=$_POST['tgl_pelanggaran'];
 $id_santri=$_POST['id_santri'];
 $ket_pelanggaran=$_POST['ket_pelanggaran'];
 
 

 mysqli_query($koneksi,"UPDATE pelanggaran SET jenis_pelanggaran='$jenis_pelanggaran', nama_pelanggaran='$nama_pelanggaran', tgl_pelanggaran='$tgl_pelanggaran', id_santri='$id_santri','ket_pelanggaran='$ket_pelanggaran' where id_pelanggaran='$id'");

 header("location:pelanggaran.php"); 
?>