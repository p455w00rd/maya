<?php
include 'header.php';
?>
<div class="container">
	<div class="card mt-4 mx-auto">
		<div class="card-body"> 
		<h2> DATA PENGAMPU KEGIATAN</h2>
		<p class="text-muted"> Menampilkan Semua Nama Penanggung Jawab Kegiatan </p>
		<hr>


		<a href="tambah_pj.php" class="btn btn-primary btn-sm mb-3">Tambah Penanggung jawab Kegiatan </a>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th width="1%"> NO</th>
			<th>Nama Penanggung Jawab</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No.HP</th>
			<th>Kegiatan Yang Diampu</th>
			<th>Opsi</th>
	</tr>

	<?php
	$no=1;
$pj = mysqli_query($koneksi,"SELECT * FROM pj");
while ($p = mysqli_fetch_array($pj)) {
	?>
	<tr>
	<td><?php echo $no++;  ?></td>
	<td><?php echo $p['nama_pj']; ?></td>
	<td><?php echo $p['jenis_kelamin']; ?></td>
	<td><?php echo $p['alamat']; ?></td>
	<td><?php echo $p['no_hp']; ?></td>
	<td><?php echo $p['keg_ygdiampu']; ?></td>
	 
	<td>
	<a href="edit_pj.php?id= <?php echo $p['id_pj'];?>" class='btn btn-primary btn-sm' >Edit</a>
	<a href="hapu_pj.php?id= <?php echo $p['id_pj'];?>" class='btn btn-danger btn-sm'>Hapus</a>

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


