<?php
include 'header.php';
?>
<div class="container">
	<div class="card">
	<div class="card-body">
	
		<h2> TAMBAH KEGIATAN </h2>
		<p class="text-muted">Mengupdate Nama Santri Berprestasi Pondok Pesantren Nurul Islam</p>
		<hr>
		<a  class="btn btn-primary btn-sm" href="prestasi.php">Kembali </a>
		<form action="prestasi_edit_klik.php" method="post">
			<?php
			$id=$_GET['id'];
			$prestasi=mysqli_query($koneksi,"SELECT * FROM prestasi WHERE id_prestasi='$id'");
			while ($pres=mysqli_fetch_array($prestasi)){

			?>
				</div>
			<div class="form-grup mt-4">
				<label> Jenis Prestasi</label>
				<select name="jenis_prestasi">
		<option value="">-Pilih-</option>
<option <?php if ($pres['jenis_prestasi']=="ekstra_kurikuler"){echo "Selected='selected'";} ?> value="ektra_kurikuler">Ektra Kurikuler</option>
<option <?php if ($pres['jenis_prestasi']=="akademik"){echo "Selected='selected'";} ?> value="akademik">Akademik</option>
		<option <?php if ($pres['jenis_prestasi']=="non_ektra_&_akademik"){echo "Selected='selected'";} ?> value="non_ektra_&_akademik">Non Ektra dan Akademik</option>
				</select>
			</div>

			<div class="form-grup">
				<label>Nama Prestasi</label>
				<input type="text" name="nama_prestasi" required="required" class="form-control" value="<?php echo $pres['nama_prestasi']?>">
			</div>
			
			<div class="form-grup mt-4">
				<label> Juara Ke</label>
				<select name="juara_ke">
					<option value="">-Pilih-</option>
<option <?php if ($pres['juara_ke']=="1"){echo "Selected='selected'";} ?> value="1">1</option>
<option <?php if ($pres['juara_ke']=="2"){echo "Selected='selected'";} ?> value="2">2</option>
<option <?php if ($pres['juara_ke']=="3"){echo "Selected='selected'";} ?> value="3">3</option>
<option <?php if ($pres['juara_ke']=="harapan_1"){echo "Selected='selected'";} ?> value="harapan_1">Harapan 1</option>
<option <?php if ($pres['juara_ke']=="harapan_2"){echo "Selected='selected'";} ?> value="harapan_2">Harapan 2</option>
<option <?php if ($pres['juara_ke']=="harapan_3"){echo "Selected='selected'";} ?> value="harapan_3">Harapan 1</option>
		</select>
		</div>		
				<div class="form-grup mt-4">
				<label> Tingkat Kejuaran</label>
				<select name="tingkat">
		<option value="">-Pilih-</option>
		<option <?php if ($pres['tingkat']=="sekolah"){echo "Selected='selected'";} ?> value="sekolah">sekolah</option>
		<option <?php if ($pres['tingkat']=="kecamatan"){echo "Selected='selected'";} ?> value="kecamatan">kecamatan </option>
				</select>
			</div>
			<div class="form-grup">
				<label> Tanggal Prestasi</label>
				<input type="date" name="tgl" required="required" class="form-control"  value="<?php echo $pres['tgl']?>">
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
				<input type="text" name="ket_prestasi" required="required" class="form-control"  value="<?php echo $pres['ket_prestasi']?>">
			</div>
			
					
			<input type="submit" name="submit" value="simpan" class="btn btn-primary mt-4 btn-sm">
		</form> 
		<?php
		}
		?>
	</div>
</div>
</div>

<?php
include'foter.php';
?>
