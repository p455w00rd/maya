<?php
include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['pass'];

$cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");

$jumlah = mysqli_num_rows($cek);
echo $jumlah;
 if ($jumlah > 0) {
 	// jika login berhasil
 	$_SESSION ['status'] = "berhasil";
 	header("location:admin/index.php");
 } else {

 	header("location:index.php?pesan=gagal"); 
 } 

?>
<?php
