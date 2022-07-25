<?php 

	$author = $_SESSION['pengguna'];

	$sql = mysqli_query($connection, "SELECT * FROM tb_layanan ORDER BY id_layanan DESC");

 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h5>Data Postingan Layanan</h5>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr class="text-center">
						<th>No</th>
						<th>Judul</th>
						<th>Artikel</th>
						<!-- <th>Image</th> -->
						<th>Tindakan</th>
					</tr>
				<?php $no = 1; foreach($sql as $data): ?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $data['judul_layanan'] ?></td>
						<td><?= substr($data['artikel_layanan'], 0, 100) ?></td>
						<td class="text-center">
							<a href="index.php?page=hapus-layanan&id=<?=$data['id_layanan'] ?>" class="btn btn-danger">
								<i class="fas fa-trash"></i>
							</a>
							<a href="index.php?page=edit-layanan&id=<?=$data['id_layanan'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-edit"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>