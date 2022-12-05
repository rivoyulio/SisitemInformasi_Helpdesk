<form action="" method="POST">
    <div class="card">
        <div class="card-header text-center">
            Tambah Data Admin
        </div>
        <div class="card-body">
            <form>
            <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>

                <br>
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</form>

<?php

if (isset($_POST['tambah'])) {
    $password = md5($_POST['password']);
    $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
    $query = mysqli_query($koneksi, "INSERT INTO user VALUES (NULL, '" . $_POST['email'] . "', '" . $_POST['username'] . "','" . $password . "')");

    if ($query) {
        echo "<script>alert('Data Berhasil DiTambah')</script>";
        echo "<script>location = 'index.php?p=user'</script>";
    } else {
        echo "<script>alert('Data Gagal DiTambah')</script>";
    }
}

?>


