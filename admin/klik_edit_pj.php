<?php
 include '../koneksi.php';
 $id = $_POST ['id'];
 $nama_pj = $_POST ['nama_pj'];
 $jenis_kelamin=$_POST['jenis_kelamin'];
 $alamat=$_POST['alamat'];
 $no_hp=$_POST['no_hp'];
 $keg_ygdiampu=$_POST['keg_ygdiampu'];
 

 mysqli_query($koneksi,"UPDATE pj SET nama_pj='$nama_pj', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', keg_ygdiampu='$keg_ygdiampu' where id_pj='$id'");

 header("location:pj.php"); 
?>