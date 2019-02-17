<?php
include 'header.php';
?>
	<div class="container">
	<div class="row"> 
	<div class="col-md-8 mx-auto">
	<div class="card mb-4 ">
	<div class="card-body">
			
		<h2> TAMBAH DATA SANTRI  </h2>
		<p class="text-muted"> Menambahkan Data Data Santri Baru</p>
		<hr>
		<form action="santri_tambah_klik.php" method="post">
			
			<div class="form-grup">
				<label>Nomor Induk Santri</label>
				<input type="number" name="nis" required="required" class="form-control">
			</div>
			<div class="form-grup">
				<label>Nama Santri</label>
				<input type="text" name="nama_santri" required="required" class="form-control">
			</div>
			<div class="form-grup mt-4">
				<label> Jenis Kelamin</label>
				<select name="jk">
					<option value="">-Pilih-</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-grup">
				<label>Alamat</label>
				<input type="text" name="alamat" required="required" class="form-control">
			</div>
					
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
	</div>
		</div>
		
	</div>
</div>
	</div>
</div>
</div>

<?php
include'foter.php';
?>


