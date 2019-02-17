<?php
include 'header.php';
?>
<div class="container">
	<div class="row"> 
<div class="col-md-8 mx-auto">
	<div class="container">
		<div class="card-body">
			<div class="card mt-4 mx-auto">
		<h2> UPDATE DATA PENANGGUNG JAWAB  </h2>
		<p class="text-muted"> Update Data Penanggung Jawab Kegiatan </p>
		<hr>
		
		<form action="klik_edit_pj.php" method="post">

	<?php
	$id = $_GET['id'];
	$data = mysqli_query ($koneksi,"SELECT * FROM pj WHERE id_pj='$id'");
	while ($p = mysqli_fetch_array($data)){
	?> 
	<div class="form-grup">
				<label>Nama</label>
				<input type="text" name="nama_pj" required="required" class="form-control" value="<?php echo $p['nama_pj'];?>">
				<input type="hidden" name="id" value="<?php echo $p['id_pj'];?>">
				<label> Jenis Kelamin </label>
				<div class="form-grup mt-4">
				<label> Jenis Kelamin</label>
				<select name="jenis_kelamin">
					<option value="">-Pilih-</option>
					<option <?php if ($p['jenis_kelamin']=="laki-laki"){echo "Selected='selected'";} ?> value="Laki-laki">laki-laki</option>
					<option <?php if ($p['jenis_kelamin']=="Perempuan"){echo "Selected='selected'";} ?> value="Perempuan">Perempuan</option>
				</select>
			</div>
				<label>Alamat </label>
				<input type="text" name="alamat" required="required" class='form-control' value="<?php echo $p['alamat'];?>">
				<label> No. Handphone</label>
				<input type="number" name="no_hp" required="required" class='form-control' value="<?php echo $p['no_hp'];?>">
				<label> Kegiatan yang Diampu</label>
				<td><input type="text" name="keg_ygdiampu" required="required" class='form-control' value="<?php echo $p['keg_ygdiampu'];?>">

			</div>
				<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
			
	<?php
}
?>
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


