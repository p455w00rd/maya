<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> DATA KEGIATAN </h2>
		<p class="text-muted">Daftar Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="kegiatan_tambah.php">Tambah Kegiatan </a>
	<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
	<tr>
		<th width="1%"> No</th>
			<th>Nama Kegiatan</th>
			<th>Jenis Kegiatan</th>
			<th>Tanggal Kegiatan</th>
			<th>Nama Penanggung Jawab</th>
            <th>Action</th>
	</tr>
	<?php
	$no=1;
$kegiatan = mysqli_query($koneksi,"SELECT * FROM kegiatan");
while ($s = mysqli_fetch_array($kegiatan)) {
	?>
	<tr>
	<td><?php echo $no++;  ?></td>
	<td><?php echo $s['nama_kegiatan']; ?></td>
	<td><?php echo $s['jenis_kegiatan']; ?></td>
	<td><?php echo $s['tgl']; ?></td>
	<td><?php echo $s['id_pj']; ?></td>
	
	<td>
	<a href="kegiatan_edit.php?id= <?php echo $s['id_kegiatan'];?>" class='btn btn-primary btn-sm' >Edit</a>
	<a href="kegiatan_hapus.php?id= <?php echo $s['id_kegiatan'];?>" class='btn btn-danger btn-sm'>Hapus</a>

	</td>
	</tr>
	<?php
		}
	?>

</table>
    </div>
</div>
</div>
</div>

<?php
include'foter.php';
?>


