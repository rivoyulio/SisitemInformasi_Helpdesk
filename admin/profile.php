<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h3>Rivo Yulio</h3>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<a href="index.php" style="text-decoration: none;">
				Dashboard
			</a>
			<a href="index.php" class="px-2" style="text-decoration: none;">/</a>
			<a href="index.php?p=ubahprofile" style="text-decoration: none;">
				Ubah Profile
			</a>
		</div>
	</div>
</div>

<div class="container-fluid my-4">
	<div class="row">
		<div class="col-md-3 pt-5 rounded shadow-sm" style="border: 1px solid gainsboro;">
			<div class="row">
				<div class="col text-center">
					<img class="img-fluid" src="../img/user.png">

				</div>
			</div>
			<div class="row mt-3">
				<div class="col text-center">
					<h5>Rivo Yulio</h5>
				</div>
			</div>
			<div class="row mt-3">
			</div>
			<div class="row mt-5 bg-light">
				<div class="col text-center py-4">
					<h3>0</h3>
					<h5>Kontak</h5>
				</div>
				<div class="col text-center py-4">
					<h3>0</h3>
					<h5>Layanan</h5>
				</div>
			</div>
		</div>
		<div class="col rounded shadow-sm ms-5 py-5 px-5" style="border: 1px solid gainsboro;">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="btn btn-primary nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About Me</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="btn btn-primary nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Upload Foto</button>

				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active mt-4" id="home" role="tabpanel" aria-labelledby="home-tab">
					Lokasi<br>
					Padang, Indonesia
				</div>
				<div class="tab-pane fade mt-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<input type="file" name="gambar"><br>
					<a href="#" class="btn btn-primary mt-2">Simpan</a>
				</div>
			</div>
		</div>
	</div>
</div>