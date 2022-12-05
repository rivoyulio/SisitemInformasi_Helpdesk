

<?php 
    include'koneksi.php';

        $password = htmlentities(($_POST['password']));

        //enkripsi password
        $password = sha1($password);
        $query = mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'".$_POST['email']."','".$_POST['username']."','".$password."' )");
        
        if($query){
            echo "<script>alert('Berhasil Registrasi')</script>";
            echo "<script>location = 'login.php'</script>";
        }else{
            echo "<script>alert('Gagal Registrasi')</script>";

        }
    ?>