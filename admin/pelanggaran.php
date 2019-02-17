<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> DATA KEGIATAN </h2>
		<p class="text-muted">Daftar Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="pelanggaran_tambah.php">Tambah Kegiatan </a>
	
	<table class="table table-bordered table-striped table-hover">
	<tr>
		<th width="1%"> No</th>
			<th>Jenis Pelanggaran</th>
			<th>Nama Pelanggaran</th>
			<th>Tanggal</th>
			<th>Nama Satri</th>
			<th>Keterangan</th>
	</tr>
	<?php
	$no=1;
$pelanggaran = mysqli_query($koneksi,"SELECT * FROM pelanggaran");
while ($pel = mysqli_fetch_array($pelanggaran)) {
	?>
	<tr>
	<td><?php echo $no++;  ?></td>
	<td><?php echo $pel['jenis_pelanggaran']; ?></td>
	<td><?php echo $pel['nama_pelanggaran']; ?></td>
	<td><?php echo $pel['tgl_pelanggaran']; ?></td>
	<td><?php echo $pel['id_santri']; ?></td>
	<td><?php echo $pel['ket_pelanggaran']; ?></td>
	
	<td>
	<a href="pelanggaran_edit.php?id= <?php echo $pel['id_pelanggaran'];?>" class='btn btn-primary btn-sm' >Edit</a>
	<a href="pelanggaran_hapus.php?id= <?php echo $pel['id_pelanggaran'];?>" class='btn btn-danger btn-sm'>Hapus</a>

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


