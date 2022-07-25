<?php 

	$id = $_GET['id'];

	$sql = mysqli_query($connection, "SELECT * FROM tb_layanan WHERE id_layanan='$id'");
	$data = mysqli_fetch_array($sql);

 ?>

<div class="row">
	<div class="col-lg-10 m-auto">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12">
							<label for="judul">Judul Artikel</label>
							<input type="text" name="judul" placeholder="Masukkan Judul" class="form-control" value="<?= $data['judul_layanan'] ?>">
						</div>
						<div class="col-lg-12 mt-3">
							<label for="text">Masukkan Deskripsi Artikel</label>
							<textarea class="form-control" name="artikel" cols="30" rows="10"><?= $data['artikel_layanan'] ?></textarea>
						</div>
						<div class="col-lg-12 mt-3">
							<button name="submit" class="btn btn-primary btn-block">Edit Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
		$id = $_GET['id'];
		$judul = $_POST['judul'];
		$artikel = $_POST['artikel'];
		
		$sql= mysqli_query($connection, "SELECT * FROM tb_layanan WHERE id_layanan='$id'");
		$data = mysqli_fetch_array($sql);

		$sql = mysqli_query($connection, "UPDATE tb_layanan SET judul_layanan='$judul', artikel_layanan='$artikel' WHERE id_layanan='$id'");
		echo "<script>alert('Data Berhasil Di ubah!')</script>";
		echo "<script>window.location.href='index.php?page=tampil-layanan'</script>";
	}

 ?>