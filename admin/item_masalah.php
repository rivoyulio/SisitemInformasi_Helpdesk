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
		<div class="col-md-4">
			<select class="custom-select" name="id_kategori_masalah">
			<?php

			//Perintah sql untuk menampilkan semua data pada tabel jurusan

			$sql="select * from kategori_masalah";



			$hasil=mysqli_query($koneksi,$sql);

			$no=0;

			while ($data = mysqli_fetch_array($hasil)) {

			$no++;



			$ket="";

			if (isset($_POST['kategori_masalah'])) {

			$jurusan = trim($_POST['kategori_masalah']);



			if ($jurusan==$data['id_kategori_masalah'])

			{

			$ket="selected";

			}

			}

			?>
			
			<option <?php echo $ket; ?> value="<?php echo $data['id_kategori_masalah'];?>"><?php echo

			$data['nama_kategori'];?></option> 
			<?php

			}

			?>
			</select>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col">
			<label class="form-label mb-3">
				<i class="fas fa-pen pe-1"></i>
				Tambah Data Item Masalah 
			</label>
			<textarea class="form-control" style="width: 100%;height: 200px;" name="nama_item_masalah"></textarea>
			<input type="submit" name="tambah" class="btn btn-primary mt-3" value="Simpan">
			<a href="index.php?p=operator" class="btn btn-danger mt-3">Kembali</a>
		</div>
	</div>
</div>
</form>
<?php
    if (isset($_POST['tambah'])) {
        $query = mysqli_query($koneksi, "INSERT INTO item_masalah VALUES(NULL,'" . $_POST['nama_item_masalah'] . "', '" . $_POST['id_kategori_masalah'] . "')");

        if ($query) {
            echo "<script>alert('Data Berhasil DI Tambah')</script>";
            echo "<script>location='index.php'</script>";
        } else {
            echo "<script>alert('Data Gagal DI Tambah')</script>";
        }
    }
?>