<div class="container-fluid">
	<div class="row mt-4">
		<div class="col">
			<a href="index.php?p=tiketmasuk" class="btn btn-primary">
			
				<i class="fas fa-download pe-2"></i>
				Input Tiket Masuk
			</a>
            <a href="index.php?p=print_tiket" class="btn btn-primary float-right">
            <i class="fas fa-print"></i> Print</a>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col">
			<table class="table table-striped">
				<tr style="background-color: dodgerblue;">
					<th width="3%" style="color:white;">No</th>

					<th width="10%" style="color:white;">Bagian</th>
                    <th width="20%" style="color:white;">Kategori Masalah</th>
					<th width="20%" style="color:white;">Item Masalah</th>
					<th width="20%" style="color:white;">Tanggal</th>
					<th width="15%" style="color:white;">Nama User</th>	
                    <th width="10%" style="color:white;">Status</th>
                    <th width="10%" style="color:white;">Aksi</th>
				</tr>

				<?php
 $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
				$query = mysqli_query($koneksi, "SELECT * FROM tiket 
                inner join item_masalah on tiket.id_item_masalah = item_masalah.id_item_masalah
                inner join user on tiket.id_user = user.id_user
                inner join bagian on tiket.id_bagian = bagian.id_bagian
                inner join kategori_masalah on tiket.id_kategori_masalah = kategori_masalah.id_kategori_masalah
                ");
				$cek = mysqli_num_rows($query);
				if ($cek > 0) {
					$no = 1;
					while ($data = mysqli_fetch_assoc($query)) { ?>
						<tr>
							<td><?php echo $no++; ?></td>

							<td><?php echo $data['nama_bagian']; ?></td>
							<td><?php echo $data['nama_item_masalah']; ?></td>
							<td><?php echo $data['nama_kategori']; ?></td>
							<td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['username']; ?></td>
							<td><?php echo $data['status']; ?></td>
                            <td>
                            <a href="index.php?p=penanganan&id_tiket=<?php echo $data['id_tiket'] ?>" class="btn btn-success">Penanganan</a>
  
                        </td>
						</tr>

				<?php
					}
				}

				?>

			</table>
		</div>
	</div>
</div>