<?php
include 'header.php';
?>
<div class="container">
	<div class="row"> 
<div class="col-md-8 mx-auto">
	<div class="container">
		<div class="card-body">
			<div class="card mt-4 mx-auto">
		<h2> TAMBAH PENANGGUNG JAWAB  </h2>
		<p class="text-muted"> Menambahkan Data Penanggung Jawab Kegiatan Baru</p>
		<hr>
		<form action="klik_tambah_pj.php" method="post">
			<div class="form-grup">
				<label>Nama</label>
				<input type="text" name="nama_pj" required="required" class="form-control">
			</div>
			<div class="form-grup mt-4">
				<label> Jenis Kelamin</label>
				<select name="jenis_kelamin">
					<option value="">-Pilih-</option>
					<option value="Laki-laki">laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-grup">
				<label>Alamat</label>
				<input type="text" name="alamat" required="required" class="form-control">
			</div>
			<div class="form-grup">
				<label>No.Handphone</label>
				<input type="number" name="no_hp" required="required" class="form-control">
			</div>
			<div class="form-grup">
				<label>Kegiatan yang Diampu</label>
				<input type="text" name="keg_ygdiampu" required="required" class="form-control">
			</div>
		
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
	</div>
		</div>
		
	</div>
</div>
	</div>

</div>

<?php
include'foter.php';
?>


