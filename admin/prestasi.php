<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> DATA KEGIATAN </h2>
		<p class="text-muted">Daftar Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="prestasi_tambah.php">Tambah Kegiatan </a>
	
	<table class="table table-bordered table-striped table-hover">
	<tr>
		<th width="1%"> No</th>
			<th>Jenis Prestasi</th>
			<th>Nama Prestasi</th>
			<th>Juara Ke</th>
			<th>Tingkat</th>
			<th>Tanggal</th>
			<th>Nama Satri</th>
			<th>Keterangan</th>
	</tr>
	<?php
	$no=1;
$prestasi = mysqli_query($koneksi,"SELECT * FROM prestasi");
while ($pres = mysqli_fetch_array($prestasi)) {
	?>
	<tr>
	<td><?php echo $no++;  ?></td>
	<td><?php echo $pres['jenis_prestasi']; ?></td>
	<td><?php echo $pres['nama_prestasi']; ?></td>
	<td><?php echo $pres['juara_ke']; ?></td>
	<td><?php echo $pres['tingkat']; ?></td>
	<td><?php echo $pres['tgl']; ?></td>
	<td><?php echo $pres['id_santri']; ?></td>
	<td><?php echo $pres['ket_prestasi']; ?></td>
	
	<td>
	<a href="prestasi_edit.php?id= <?php echo $pres['id_prestasi'];?>" class='btn btn-primary btn-sm' >Edit</a>
	<a href="prestasi_hapus.php?id= <?php echo $pres['id_prestasi'];?>" class='btn btn-danger btn-sm'>Hapus</a>

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


