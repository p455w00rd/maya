<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" >
	<script type="text/javascript" src="../bootstrap/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>

<?php
include 'cek_login.php';
include'../koneksi.php';
?>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 mt-3" >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <?php if($_SESSION['admin']==0){ ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kegiatan.php">KEGIATAN</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="pj.php">PENANGGGUNG JAWAB</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="absensi.php">ABSENSI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="santri.php">SANTRI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prestasi.php">PRESTASI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pelanggaran.php">PELANGGARAN</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        <?php }
        else{
        ?>
        <li class="nav-item">
            <a class="nav-link" href="prestasi.php">PRESTASI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pelanggaran.php">PELANGGARAN</a>
        </li>
        <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" tabindex="-1" >LOGOUT</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>