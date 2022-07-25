<?php 

	$sql = mysqli_query($connection, "SELECT * FROM tb_struktur");
	$data = mysqli_fetch_array($sql);

 ?>
<div class="row">
	<div class="col-lg-4 col-xs-12">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Data Struktur Organisasi</h5>
			</div>
			<div class="card-body">
				<img src="assets/img/struktur/<?= $data['file_struktur'] ?>" style="width: 100%;height: 30vh;"></img>
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
							<label for="file">Masukkan File Gambar</label>
							<input type="file" name="file" class="form-control" value="<?= $data['file_struktur'] ?>">
							<p class="text-danger mt-2" style="font-size: 12px;">File harus format : jpg, png. Ukuran max 5MB</p>
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
		$ekstensi_boleh = array('file_struktur');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if(!empty($gambar)) {
			if($ukuran < 5000000) {
				move_uploaded_file($file_tmp, 'assets/img/struktur/'. $gambar);
				$sql = mysqli_query($connection, "UPDATE tb_struktur SET file_struktur='$gambar'");
				echo "<script>alert('Data Berhasil Di ubah!')</script>";
				echo "<script>window.location.href='index.php?page=struktur-organisasi'</script>";
			}
		} else {
			$gambar = $data['file_struktur'];
			$sql = mysqli_query($connection, "UPDATE tb_struktur SET file_struktur='$gambar'");
			echo "<script>alert('Data Berhasil Di ubah!')</script>";
			echo "<script>window.location.href='index.php?page=struktur-organisasi'</script>";
		}
	}
	
 ?>