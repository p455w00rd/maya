<?php
include 'header.php';
?>

<div class="container">

	<div class="card">
		<div class="card-body">

		<h2>DATA SANTRI</h2>
		<p class="text-muted"> Menampilkan Semua Data Santri </p>
		<hr>
		
		<a href="santri_tambah.php" class="btn btn-primary btn-sm mb-3">Tambah Data Santri </a>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th width="1%"> No</th>
			<th>Nomor Induk Santri</th>
			<th>Nama Santri</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
	</tr>
	<?php
	$no=1;
$tbl_santri = mysqli_query($koneksi,"SELECT * FROM tbl_santri");
while ($s = mysqli_fetch_array($tbl_santri)) {
	?>
	<tr>
	<td><?php echo $no++;  ?></td>
	<td><?php echo $s['nis']; ?></td>
	<td><?php echo $s['nama_santri']; ?></td>
	<td><?php echo $s['jk']; ?></td>
	<td><?php echo $s['alamat']; ?></td>
	
	<td>
	<a href="santri_edit.php?id= <?php echo $s['id_santri'];?>" class='btn btn-primary btn-sm' >Edit</a>
	<a href="santri_hapus.php?id= <?php echo $s['id_santri'];?>" class='btn btn-danger btn-sm'>Hapus</a>

	</td>
	</tr>
	<?php
		}
	?>

</table> 
</div>
</div>

<?php
include'foter.php';
?>


