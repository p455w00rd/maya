<?php
 include '../koneksi.php';
 $id = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM pj WHERE id_pj='$id'");
 header("location:pj.php");
?>
