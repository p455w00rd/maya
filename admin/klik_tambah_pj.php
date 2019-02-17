 <?php
include '../koneksi.php';
$nama_pj = $_POST['nama_pj'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$keg_ygdiampu=$_POST['keg_ygdiampu'];

mysqli_query($koneksi, "INSERT INTO pj VALUES ('','$nama_pj','$jenis_kelamin','$alamat', '$no_hp', '$keg_ygdiampu')");
header ("location:pj.php");
?>
 