<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> TAMBAH KEGIATAN </h2>
		<p class="text-muted">Menambahkan Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="prestasi.php">Kembali </a>
		<form action="prestasi_tambah_klik.php" method="post">
			
				</div>
			<div class="form-grup mt-4">
				<label> Jenis Prestasi</label>
				<select name="jenis_prestasi">
					<option value="">-Pilih-</option>
					<option value="ektra_kurikuler">Ektra Kurikuler</option>
					<option value="akademik">Akademik</option>
					<option value="non_ektra_&_akademik">Non Ektra dan Akademik</option>
				</select>
			</div>
			<div class="form-grup">
				<label>Nama Prestasi</label>
				<input type="text" name="nama_prestasi" required="required" class="form-control">
			</div>
			</div>
			<div class="form-grup mt-4">
				<label> Juara Ke</label>
				<select name="juara_ke">
					<option value="">-Pilih-</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="harapan_1">Harapan 1</option>
					<option value="harapan_2">Harapan 2</option>
					<option value="harapan_3">Harapan 3</option>
				</select>
			</div>
				<div class="form-grup mt-4">
				<label> Tingkat Kejuaran</label>
				<select name="tingkat">
					<option value="">-Pilih-</option>
					<option value="Sekolah">Sekolah</option>
					<option value="Kecamatan">Kecamatan</option>
					<option value="Kabupaten ">Kabupaten</option>
					<option value="Provinsi ">Provinsi</option>
					<option value="Nasional ">Nasional</option>
				</select>
			</div>
			<div class="form-grup">
				<label> Tanggal Prestasi</label>
				<input type="date" name="tgl" required="required" class="form-control">
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
				<input type="text" name="ket_prestasi" required="required" class="form-control">
			</div>
			
					
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
	</div>
</div>
</div>

<?php
include'foter.php';
?>
