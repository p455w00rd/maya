<?php
 include '../koneksi.php';
 $id = $_POST ['id'];
 $nis = $_POST ['nis'];
 $nama_santri = $_POST ['nama_santri'];
 $jk=$_POST['jk'];
 $alamat=$_POST['alamat'];
 
 

 mysqli_query($koneksi,"UPDATE tbl_santri SET nis='$nis', nama_santri='$nama_santri', jk='$jk', alamat='$alamat' where id_santri='$id'");

 header("location:santri.php"); 
?>