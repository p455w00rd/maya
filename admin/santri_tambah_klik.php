 <?php
include '../koneksi.php';
$nis = $_POST['nis'];
$nama_santri = $_POST['nama_santri'];
$jk = $_POST['jk'];
$alamat=$_POST['alamat'];


mysqli_query($koneksi, "INSERT INTO tbl_santri VALUES ('','$nis','$nama_santri','$jk','$alamat')");
header ("location:santri.php");
?>
 