<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> TAMBAH KEGIATAN </h2>
		<p class="text-muted">Menambahkan Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="absensi.php">Kembali </a>
		<form action="absensi_tambah_klik.php" method="post">
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

				<div class="form-grup">
				<label>Nama Penanggung jawab</label>
				<select name="id_pj" class="form-control" required="required">
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

				<div class="form-grup">
				<label>Nama Kegiatan</label>
				<select name="id_kegiatan" class="form-control" required="required">
					<option value="">-Pilih-</option>
				<?php
				$kegiatan=mysqli_query($koneksi,"SELECT * FROM kegiatan");
				while ($k=mysqli_fetch_array($kegiatan)){
					?>
				<option value="<?php echo $k['id_kegiatan'];?>"><?php echo $k['nama_kegiatan'];?></option>
				<?php
				}
				?>
				</select>

			</div>
			<div class="form-grup">
				<label> Tanggal Pelanggaran</label>
				<input type="date" name="tgl_absensi" required="required" class="form-control">
			</div>
			<div class="form-grup">
				<label> Keterangan</label>
				<input type="text" name="ket_absensi" required="required" class="form-control">
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
