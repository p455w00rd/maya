<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> TAMBAH KEGIATAN </h2>
		<p class="text-muted">Menambahkan Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="pelanggaran.php">Kembali </a>
		<form action="pelanggaran_tambah_klik.php" method="post">
		</div>

			<div class="form-grup mt-4">
				<label> Jenis Pelanggarn</label>
				<select name="jenis_pelanggaran">
					<option value="">-Pilih-</option>
					<option value="ringan">Ringan</option>
					<option value="sedang">Sedang</option>
					<option value="berat">Berat</option>
				</select>
			</div>

			<div class="form-grup">
				<label>Nama Pelanggaran</label>
				<input type="text" name="nama_pelanggaran" required="required" class="form-control">
			</div>
						
			<div class="form-grup">
				<label> Tanggal Pelanggaran</label>
				<input type="date" name="tgl_pelanggaran" required="required" class="form-control">
			</div>
			
				<div class="form-grup">
				<label>Nama Santri</label>
				<select name="id_santri" class="form-control" required="required">
					<option value="">-Pilih-</option>
				<?php
				$santri=mysqli_query($koneksi,"SELECT * FROM tbl_santri");
				while ($s=mysqli_fetch_array($santri)){
					?>
				<option value="<?php echo $s['id_santri'];?>"><?php echo $s['nama_santri'];?></option>
				<?php
				}
				?>
				</select>
			</div>
			<div class="form-grup">
				<label> Keterangan</label>
				<input type="text" name="ket_pelanggaran" required="required" class="form-control">
			</div>
			
					
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
	</div>
</div>
</div>
</div>

<?php
include'foter.php';
?>
