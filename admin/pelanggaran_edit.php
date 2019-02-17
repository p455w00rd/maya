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
		<form action="pelanggaran_edit_klik.php" method="post">
		</div>
		<?php  
		$id=$_GET['id'];
		$pelanggaran=mysqli_query($koneksi,"SELECT * FROM pelanggaran WHERE id_pelanggaran='$id'");
		while ($pel=mysqli_fetch_array($pelanggaran)) {
		?>
		

			<div class="form-grup mt-4">
				<label> Jenis Pelanggarn</label>
				<select name="jenis_pelanggaran">
					<option <?php if ($pres['jenis_prestasi']=="ekstra_kurikuler"){echo "Selected='selected'";} ?> value="ektra_kurikuler">Ektra Kurikuler</option>
					<option value="">-Pilih-</option>
					<option <?php if ($pel['jenis_pelanggaran']=="ringan") { echo "Selected='selected'";
					} ?>  value="ringan">Ringan</option>
					<option <?php if ($pel['jenis_pelanggaran']=="sedang") { echo "Selected='selected'";
					} ?> value="sedang">Sedang</option>
					<option <?php if ($pel['jenis_pelanggaran']=="berat") { echo "Selected='selected'";
					} ?> value="berat">Berat</option>
				</select>
			</div>

			<div class="form-grup">
				<label>Nama Pelanggaran</label>
				<input type="text" name="nama_pelanggaran" required="required" class="form-control" value="<?php echo $pel['nama_pelanggaran'] ?>">
			</div>
			
						
			<div class="form-grup">
				<label> Tanggal Pelanggaran</label>
				<input type="date" name="tgl_pelanggaran" required="required" class="form-control" value=" <?php echo $pel['tgl_pelanggaran'] ?>">
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
				<input type="text" name="ket_pelanggaran" required="required" class="form-control" value="<?php echo $pel['ket_pelanggaran'] ?>">
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

<?php
include'foter.php';
?>
