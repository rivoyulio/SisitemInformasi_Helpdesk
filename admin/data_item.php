<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2>Dashboard Operator</h2>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<a href="index.php?p=home" style="text-decoration: none;">Beranda</a>
			<a href="#" class="mx-2" style="text-decoration: none;">/</a>
			<a href="index.php?p=bagian_operator" style="text-decoration: none;">Operator</a>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col">
			<a href="index.php?p=operator" class="btn btn-outline-primary px-3">Data Bagian Masalah</a>
			<a href="index.php?p=data_kategori" class="btn btn-outline-warning mx-3 px-3">Data Kategori Masalah</a>
			<a href="index.php?p=data_item" class="btn btn-outline-success active px-3">Data Item Masalah</a>
		</div>
	</div>
	<div class="row mt-4">
		<div class="col">
			<table class="table table-bordered">
				<tr>
					<th colspan="4" class="text-center" style="background-color: dodgerblue;color: white;">
						Data Bagian
					</th>
				</tr>
				<tr class="bg-light">
					<th width="3%" align="center">No</th>
					<th width="40%">Nama Kategori</th>
					<th width="40%">Item Masalah</th>
					<th>Aksi</th>
				</tr>
				 <?php
			        $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
			        $no=1;
			        $query = mysqli_query($koneksi, "select * from item_masalah 
														inner join kategori_masalah on item_masalah.id_kategori_masalah = kategori_masalah.id_kategori_masalah 
														");
			        while($data = mysqli_fetch_array($query)){
			    ?>
				<tr>
					<td><?=$no++?></td>
					<td><?=$data['nama_kategori']?></td>
					<td><?=$data['nama_item_masalah']?></td>
					<td class="text-center">
					<a href="delete_item.php?id_item_masalah=<?= $data['id_item_masalah']?>" onclick="return confirm('Yakin mau hapus?')" class="btn btn-danger">
							Hapus Data
						</a>
					</td>
				</tr>
				<?php
       				 }
        		?>
			</table>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col">
			<a href="index.php?p=operator" class="btn btn-primary">
				<i class="fas fa-arrow-circle-left"></i>
				Kembali
			</a>
		</div>
	</div>
</div>
</form>