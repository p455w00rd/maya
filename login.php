<?php
include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['pass'];
$_SESSION['username']= $username;

$cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password' LIMIT 1");
$data =mysqli_fetch_array($data);
$jumlah = mysqli_num_rows($cek);
echo $jumlah;
 if ($jumlah > 0) {
 	// jika login berhasil
 	$_SESSION ['status'] = "berhasil";
 	$_SESSION['username']= $username;
 	$_SESSION['admin']= $data['admin'];
 	header("location:admin/index.php");
 } else {

 	header("location:index.php?pesan=gagal"); 
 } 

?>
<?php
