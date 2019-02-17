<?php
 include '../koneksi.php';
 $id = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM pelanggaran WHERE id_pelanggaran='$id'");
 header("location:pelanggaran.php");
?>


