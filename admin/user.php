<h3>Halaman User</h3>
<div class="container-fluid">
    <a href="index.php?p=user_tambah" class="btn btn-primary mt-3">Tambah User</a>
    <table class="table table-dark table-striped mt-3">
        <br>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Option</th>
        </tr>
        <?php

        $query = mysqli_query($koneksi, "SELECT * FROM user");
        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            $no = 1;
            while ($data = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td>
                        <a href="index.php?p=user_edit&id_user=<?php echo $data['id_user'] ?>" class="btn btn-success">Edit</a>
                        <a href="index.php?p=user_hapus&id_user=<?php echo $data['id_user'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</div>