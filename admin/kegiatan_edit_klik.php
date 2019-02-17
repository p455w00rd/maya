<?php
 include '../koneksi.php';
 $id = $_POST ['id_kegiatan'];
 $nama_kegiatan = $_POST ['nama_kegiatan'];
 $jenis_kegiatan=$_POST['jenis_kegiatan'];
 $tgl=$_POST['tgl'];
 $id_pj=$_POST['id_pj'];
 
 

 mysqli_query($koneksi,"UPDATE kegiatan SET nama_kegiatan='$nama_kegiatan', jenis_kegiatan='$jenis_kegiatan', tgl='$tgl', id_pj='$id_pj' where id_kegiatan='$id'");

 header("location:kegiatan.php"); 
?>