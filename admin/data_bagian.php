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
			<label class="form-label mb-3">
				<i class="fas fa-pen pe-1"></i>
				Tambah Data Bagian Masalah 
			</label>
			<textarea class="form-control" style="width: 100%;height: 200px;" name="nama_bagian"></textarea>
			<input type="submit" name="tambah" class="btn btn-primary mt-3" value="Simpan">
			<a href="index.php?p=bagian_operator" class="btn btn-danger mt-3">Kembali</a>
		</div>
	</div>
</div>
</form>

<?php

if (isset($_POST['tambah'])) {
    $query = mysqli_query($koneksi, "INSERT INTO bagian VALUES(NULL, '" . $_POST['nama_bagian'] . "')");

    if ($query) {
        echo "<script>alert('Data Berhasil DI Tambah')</script>";
        echo "<script>location='index.php'</script>";
    } else {
        echo "<script>alert('Data Gagal DI Tambah')</script>";
    }
}
?>
