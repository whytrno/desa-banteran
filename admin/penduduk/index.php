<?php 

	$sql = mysqli_query($connection, "SELECT * FROM tb_penduduk");
	$data = mysqli_fetch_array($sql);

 ?>
<div class="row">
	<div class="col-lg-4 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Data Penduduk</h5>
			</div>
			<div class="card-body">
				<embed type="application/pdf" src="../assets/file/pdf/penduduk/<?= $data['file_penduduk'] ?>" style="width: 100%;height: 30vh;"></embed>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12 mt-3">
							<label for="file">Masukkan File PDF</label>
							<input type="file" name="file" class="form-control" value="<?= $data['file_penduduk'] ?>">
							<p class="text-danger mt-2" style="font-size: 12px;">File harus format : pdf. Ukuran max 5MB</p>
						</div>
						<div class="col-lg-12 mt-1">
							<button name="submit" name="submit" class="btn btn-primary btn-block">Edit Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
		// Set Upload Gambar
		$ekstensi_boleh = array('file_penduduk');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(!empty($gambar)) {
			if($ukuran < 5000000) {
				move_uploaded_file($file_tmp, '../assets/file/pdf/penduduk/'. $gambar);
				$sql = mysqli_query($connection, "UPDATE tb_penduduk SET file_penduduk='$gambar'");
				echo "<script>alert('Data Berhasil Di ubah!')</script>";
				echo "<script>window.location.href='index.php?page=penduduk'</script>";
			}
		} else {
			$gambar = $data['file_penduduk'];
			$sql = mysqli_query($connection, "UPDATE tb_penduduk SET file_penduduk='$gambar'");
			echo "<script>alert('Data Berhasil Di ubah!')</script>";
			echo "<script>window.location.href='index.php?page=penduduk'</script>";
		}
	}
 ?>