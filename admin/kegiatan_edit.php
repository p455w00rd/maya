<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> UPDATE KEGIATAN </h2>
		<p class="text-muted">Mengupdate Nama Kegiatan Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="kegiatan.php">Kembali </a>
		<form action="kegiatan_edit_klik.php" method="post">
			<?php
			$id=$_GET['id'];

			$kegiatan=mysqli_query($koneksi,"SELECT * FROM kegiatan WHERE id_kegiatan=$id");
			while ($k=mysqli_fetch_array($kegiatan)){
//            echo $_SESSION['admin'];
//            echo $k['id_pj'];
//            echo $id;
			?>
			
			
				<div class="form-grup">
				<label>Nama Kegiatan</label>
				<input type="text" name="nama_kegiatan" required="required" class="form-control" value="<?php echo $k['nama_kegiatan']  ?>">
				<input type="hidden" name="id_kegiatan" required="required" class="form-control" value="<?php echo $k['id_kegiatan']  ?>">
			</div>
			<div class="form-grup">
				<label>Jenis Kegiatan</label>
				<input type="text" name="jenis_kegiatan" required="required" class="form-control" value="<?php echo$k['jenis_kegiatan']?>">
			</div>

			<div class="form-grup">
				<label> Tanggal Kegiatan</label>
				<input type="date" name="tgl" required="required" class="form-control" value="<?php echo $k['tgl']?>">
			</div>
			<div class="form-grup">
				<label>Nama Penanggung Jawab</label>
				<select name="nama_peje" class="form-control" required="required">
					<option value="">-Pilih-</option>
				<?php
				$pj=mysqli_query($koneksi,"SELECT * FROM pj");
				while ($p=mysqli_fetch_array($pj)){
					?>
				<option <?php echo $p['id_pj'] == $k['id_pj']? 'selected' : '' ?> value="<?php echo $p['id_pj'];?>"><?php echo $p['nama_pj'];?></option>
				<?php
				}
				?>
			</select>
			</div>
					
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
		<?php
	}?>
	</div>
</div>
</div>
</div>

<?php
include'foter.php';
?>
