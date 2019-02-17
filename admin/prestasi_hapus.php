<?php
 include '../koneksi.php';
 $id = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM prestasi WHERE id_prestasi='$id'");
 header("location:prestasi.php");
?>
