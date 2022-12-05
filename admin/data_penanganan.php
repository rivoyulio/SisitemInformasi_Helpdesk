<form method="post" action="">
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
				<a href="#" style="text-decoration: none;">Operator</a>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col">
				<table class="table table-bordered">
					<tr style="text-align: center;background: dodgerblue;color: white;">
						<th align="center" width="3%">No.</th>
						<th width="15%">Nama Lengkap</th>
						<th width="30%">Item Masalah</th>
						<th width="30%">Deskripsi Masalah</th>
						<th>Aksi</th>
					</tr>
					 <?php
				        $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
				        $no=1;
				        $query    =mysqli_query($koneksi, "select * from pengaduan Inner join user on pengaduan.id_user = user.id_user inner join item_masalah on pengaduan.id_item_masalah = item_masalah.id_item_masalah ");
				        while($data    =mysqli_fetch_array($query)){
			    	?>
					<tr>
						<td align="center"><?=$no++?></td>
						<td><?=$data['nama_lengkap']?></td>
						<td><?=$data['nama_item_masalah']?></td>
						<td><?=$data['deskripsi_pengaduan']?></td>
						<td align="center">
							<a href="index.php?p=balas&id_pengaduan<?= $data['id_pengaduan']?>" class="btn btn-primary px-3">
								<i class="fas fa-sign-in-alt"></i>
								Balas
							</a>
							<a href="delete_data_pengaduan.php?id_pengaduan=<?= $data['id_pengaduan']?>" class="btn btn-danger">
								<i class="fas fa-times"></i>
								Hapus
							</a>
						</td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a href="index.php?p=bagian_operator" class="btn btn-primary">
					<i class="fas fa-arrow-circle-left"></i>
					Kembali
				</a>
			</div>
		</div>
		<div class="row mt-3">
		<div class="col">
			<h6>Catatan :</h6>
			<i>
				<ol start="1" style="font-size: 14px">
					<li>Terimakasih telah berkunjung ke website kami.</li>
					<li>
						Selanjutnya, silahkan berikan rating dalam layanan penanganan Kominfo Tanah Datar supaya layanan ini bisa berkembang lebih baik 
					</li>
					<li>Anda puas kamipun senang.</li>
				</ol>
			</i>
		</div>
	</div>
	</div>
</form>