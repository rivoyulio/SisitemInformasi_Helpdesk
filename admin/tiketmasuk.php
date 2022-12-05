<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h5 class="card-header">Tambah Tiket</h5>
                <div class="card-body">
                <form class="" action="" method="POST">
            <div class="card-body">
            <div class="mb-3">
                    <label for="tingkat_pend" class="form-label">Id User</label>
                    <select class="custom-select" aria-label="Default select example" name="id_user">
                        <option selected >Pilih User</option>
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
                        $Vuser = mysqli_query($koneksi, "SELECT * FROM user");
                        while ($Duser = mysqli_fetch_array($Vuser)) { ?>
                            <option value="<?php echo $Duser['id_user'] ?>"><?php echo $Duser['id_user'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </div> 
                <div class="mb-3">
                    <label for="tingkat_pend" class="form-label">Bagian</label>
                    <select class="custom-select" aria-label="Default select example" name="id_bagian">
                        <option selected >Pilih Bagian</option>
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
                        $Vid_bagian = mysqli_query($koneksi, "SELECT * FROM bagian");
                        while ($dPegawai = mysqli_fetch_array($Vid_bagian)) { ?>
                            <option value="<?php echo $dPegawai['id_bagian'] ?>"><?php echo $dPegawai['nama_bagian'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tingkat_pend" class="form-label">Kategori Masalah</label>
                    <select class="custom-select" aria-label="Default select example" name="id_kategori_masalah">
                        <option selected >Pilih Kategori Masalah</option>
                        <?php
                        $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
                        $Vid_kategori_masalah = mysqli_query($koneksi, "SELECT * FROM kategori_masalah");
                        while ($dKateMasalah = mysqli_fetch_array($Vid_kategori_masalah)) { ?>
                            <option value="<?php echo $dKateMasalah['id_kategori_masalah'] ?>"><?php echo $dKateMasalah['nama_kategori'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </div>   
                    <div class="mb-3">
                        <label for="tingkat_pend" class="form-label">Item Masalah</label>
                        <select class="custom-select" aria-label="Default select example" name="id_item_masalah">
                            <option selected >Pilih Item Masalah</option>
                            <?php
                            $koneksi = mysqli_connect("localhost","root","","db_helpdesk");
                            $Vid_item_masalah = mysqli_query($koneksi, "SELECT * FROM item_masalah");
                            while ($dItemMas = mysqli_fetch_array($Vid_item_masalah)) { ?>
                                <option value="<?php echo $dItemMas['id_item_masalah'] ?>"><?php echo $dItemMas['nama_item_masalah'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>   

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                    </div>
                    <div class="form-group">
                                            <label for="sel1">Status:</label>
                                            <select class="form-control" name="status">
                                                <option value="">--Pilih Jenis Status--</option>
                                                <option value="selesai">Selesai</option>
                                                <option value="Belum_Selesai">Belum Selesai</option>
                                            </select>
                    </div>  
                <button style="float: right;" type="submit" class="btn btn-primary right" name="tambah">Tambah </button>
            </div>
        </div>
    </form>
                </div>
            </div>
        </div>

        <?php



if (isset($_POST['tambah'])) {
    $id_user = $_POST['id_user'];
    $id_bagian = $_POST['id_bagian'];
    $id_kategori_masalah = $_POST['id_kategori_masalah'];
    $id_item_masalah = $_POST['id_item_masalah'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    $query = mysqli_query($koneksi,"INSERT INTO `tiket` (`id_tiket`, `id_user`, `id_bagian`, `id_kategori_masalah`, `id_item_masalah`, `tanggal`, `status`) VALUES (NULL, '$id_user', '$id_bagian', '$id_kategori_masalah', '$id_item_masalah', '$tanggal', '$status')");

    // echo("Error description: " . mysqli_error($conn));
    // echo($query);
    if ($query) {
        echo "<script>alert('Data Berhasil DI Tambah')</script>";
        echo "<script>location='index.php?p=tiket'</script>";
    } else {
        echo "<script>alert('Data Gagal DI Tambah')</script>";
    }
}


?>

