<?php 

	$sql = mysqli_query($connection, "SELECT * FROM tb_struktur");
	$data = mysqli_fetch_array($sql);

 ?>
<div class="px-5 md:px-[50px] lg:px-[120px] py-5 md:py-14 space-y-10 w-full h-full">
    <div class="flex border-b border-[#C4C4C4] text-3xl space-x-10 pb-8 relative">
        <button class="text-[#182126]">Struktur Organisasi</button>
    </div>
    <div class="">
        <img class="w-screen object-cover" src="admin/assets/img/struktur/<?= $data['file_struktur'] ?>" alt="">
    </div>
</div>