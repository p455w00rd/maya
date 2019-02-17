<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> DATA KEGIATAN </h2>
		<p class="text-muted">Daftar Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="absensi_tambah.php">Tambah Kegiatan </a>
	
	<table class="table table-bordered table-striped table-hover">
	<tr>
		<th width="1%"> No</th>
			<th>Nama Santri</th>
			<th>Nama Penanggung Jawab</th>
			<th>Nama Kagiatan</th>
			<th>Tanggal</th>
			<th>Keterangan</th>
	</tr>
	<?php
	$no=1;
$absensi = mysqli_query($koneksi,"SELECT * FROM absensi");
while ($ab = mysqli_fetch_array($absensi)) {
	?>
	<tr>
	<td><?php echo $no++;  ?></td>
	<td><?php echo $ab['id_santri']; ?></td>
	<td><?php echo $ab['id_pj']; ?></td>
	<td><?php echo $ab['id_kegiatan']; ?></td>
	<td><?php echo $ab['tgl_absensi']; ?></td>
	<td><?php echo $ab['ket_absensi']; ?></td>
	
	<td>
	<a href="absensi_edit.php?id= <?php echo $ab['id_absensi'];?>" class='btn btn-primary btn-sm' >Edit</a>
	<a href="absensi_hapus.php?id= <?php echo $ab['id_absensi'];?>" class='btn btn-danger btn-sm'>Hapus</a>

	</td>
	</tr>
	<?php
		}
	?>

</table> 
</div>
</div>
</div>

<?php
include'foter.php';
?>


