<?php 

session_start();

include 'koneksi.php';

$username = strtolower(stripslashes($_POST['username']));
            $password = htmlentities(($_POST['password']));

            //enkripsi password
            $password = sha1($password);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '".$username."' AND '".$password."'");
$jumlah = mysqli_num_rows($query);

if($jumlah > 0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['id_user'] = $row['id_user'];        
    $_SESSION['username'] = $row['username'];        
    $_SESSION['nama'] = $row['nama'];        
    
    echo "<script>alert('Login Berhasil')</script>";
    echo "<script>location = 'admin/index.php?p=user'</script>";
}else{
    echo"<script>alert('Password Salah')</script>";
    echo "<script>location = 'login.php'</script>";
}

?>