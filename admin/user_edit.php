
<?php
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '" . $_GET['id_user'] . "'");
$r = mysqli_fetch_array($query);

?>

<form action="" method="POST">
    <div class="card">
        <div class="card-header text-center">
            Edit Data User
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?php echo $r['username'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo $r['email'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="<?php echo $r['password'] ?>" required>
                </div>
                <br>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</form>

<?php

if (isset($_POST['edit'])) {
    $password = $_POST['password'];
    $password = sha1($password);
    $query = mysqli_query($koneksi, "UPDATE user SET username='" . $_POST['username'] . "',email='" . $_POST['email'] . "' ,password='" . $password . "'WHERE id_user='" . $_GET['id_user'] . "'  ");

    if ($query) {
        echo "<script>alert('Data Berhasil Di Edit')</script>";
        echo "<script>location = 'index.php?p=user'</script>";
    } else {
        echo "<script>alert('data Gagal Di Edit')</script>";
    }
}

?>