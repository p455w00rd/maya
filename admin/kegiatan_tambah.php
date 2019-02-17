<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> TAMBAH KEGIATAN </h2>
		<p class="text-muted">Menambahkan Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="kegiatan.php">Kembali </a>
		<form action="kegiatan_tambah_klik.php" method="post">
			
				<div class="form-grup">
				<label>Nama Kegiatan</label>
				<input type="text" name="nama_kegiatan" required="required" class="form-control">
			</div>
			<div class="form-grup">
				<label>Jenis Kegiatan</label>
				<input type="text" name="jenis_kegiatan" required="required" class="form-control">
			</div>

			<div class="form-grup">
				<label> Tanggal Kegiatan</label>
				<input type="date" name="tgl" required="required" class="form-control">
			</div>
			<div class="form-grup">
				<label>Nama Penanggung Jawab</label>
				<select name="nama_peje" class="form-control" required="required">
					<option value="">-Pilih-</option>
				<?php
				$pj=mysqli_query($koneksi,"SELECT * FROM pj");
				while ($p=mysqli_fetch_array($pj)){
					?>
				<option value="<?php echo $p['id_pj'];?>"><?php echo $p['nama_pj'];?></option>
				<?php
}
				?>
			</select>
			</div>
					
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
	</div>
</div>
</div>

<?php
include'foter.php';
?>
