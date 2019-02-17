<?php
 include '../koneksi.php';
 $id = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM tbl_santri WHERE id_santri='$id'");
 header("location:santri.php");
?>


