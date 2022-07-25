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
							<input type="text" name="judul_layanan" placeholder="Masukkan Judul" class="form-control">
						</div>
						<div class="col-lg-12">
							<textarea class="form-control" name="artikel_layanan" cols="30" rows="10"></textarea>
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
		$judul = $_POST['judul_layanan'];
		$artikel = $_POST['artikel_layanan'];
		
		$sql = mysqli_query($connection, "INSERT INTO tb_layanan VALUES ('', '$judul', '$artikel')");
		echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
		echo "<script>window.location.href='index.php?page=tampil-layanan'</script>";
	}

 ?>