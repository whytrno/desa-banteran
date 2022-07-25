<div class="row">
	<div class="col-lg-10 m-auto">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Tambah <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12">
							<input type="text" name="judul_berita" placeholder="Masukkan Judul" class="form-control">
						</div>
						<div class="col-lg-6 mt-3">
							<select name="kategori" class="form-control" disabled>
								<option value="berita">Berita</option>
							</select>
						</div>
						<div class="col-lg-6 mt-3">
							<input type="file" name="file" class="form-control"  accept="image/png, image/gif, image/jpeg">
							<p class="text-danger mt-1" style="font-size: 12px;">Ekstensi File yang di perbolehkan : jpg, png max. 2MB</p>
							<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
						</div>
						<div class="col-lg-12">
							<textarea class="form-control" name="artikel_berita" cols="30" rows="10"></textarea>
						</div>
						<div class="col-lg-12 mt-3">
							<button name="submit" class="btn btn-primary btn-block">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 
	// include "../koneksi/koneksi.php";	

	if(isset($_POST['submit'])) {
		$judul = $_POST['judul_berita'];
		$artikel = $_POST['artikel_berita'];
		$date = $_POST['tanggal'];
		$author = $_SESSION['pengguna'];
		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpeg');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

		if($ukuran < 2000000) {
			move_uploaded_file($file_tmp, '../assets/img/berita/'. $gambar);
			$sql = mysqli_query($connection, "INSERT INTO tb_berita VALUES ('', '$judul', '$artikel', '$date', '$author', '$gambar')");
			echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
			echo "<script>window.location.href='index.php?page=tampil-berita'</script>";
		} else {
			echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
		}
	}

 ?>