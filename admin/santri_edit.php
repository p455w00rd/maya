<?php
include 'header.php';
?>
<div class="container">
	<div class="row"> 
<div class="col-md-8 mx-auto">
	<div class="container">
		<div class="card-body">
			<div class="card mt-4 mx-auto">
		<h2> EDIT DATA SANTRI  </h2>
		<p class="text-muted"> Mengedit Data Data Santri </p>
		<hr>
		<a class="btn btn-primary btn-sm" href="santri.php">Kembali</a>
		<?php
		$id=$_GET['id'];
		$santri=mysqli_query($koneksi,"SELECT * FROM tbl_santri WHERE id_santri='$id'");
		while ($s=mysqli_fetch_array($santri)) {
		
		?>
		<form action="santri_edit_klik.php" method="post">
			
			<div class="form-grup">
				<label>Nomor Induk Santri</label>
				<input type="number" name="nis" required="required" class="form-control" value="<?php echo $s['nis']?>">
				<input type="hidden" name="id" value="<?php echo $s['id_santri']?>">
			</div>
			<div class="form-grup">
				<label>Nama Santri</label>
				<input type="text" name="nama_santri" required="required" class="form-control" value="<?php echo $s['nama_santri']?>">
			</div>
			<div class="form-grup mt-4">
				<label> Jenis Kelamin</label>
				<select name="jk">
					<option value="">-Pilih-</option>
	<option<?php if ($s['jk']=="Laki-laki"){echo "Selected='selected'";} ?> value="Laki-laki" >Laki-laki</option>
	
	<option <?php if ($s['jk']=="Perempuan"){echo "Selected='selected'";} ?> value="Perempuan">Perempuan</option>
				</select>
			</div>
			<div class="form-grup">
				<label>Alamat</label>
				<input  type="text" name="alamat" required="required" class="form-control" value="<?php echo $s['alamat']?>">
			</div>
					
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
		<?php
		}
		?>
	</div>
		</div>
		
	</div>
</div>
	</div>

</div>

<?php
include'foter.php';
?>


