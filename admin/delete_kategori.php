<?php
$koneksi=mysqli_connect("localhost","root","","db_helpdesk");
//menyimpan data id kedalam variabel
$m =$_GET['id_kategori_masalah'];
//query SQL untuk insert data
$query="Delete from kategori_masalah where id_kategori_masalah='$m'";
mysqli_query($koneksi, $query);
//mengalihkan kehalaman index.php
 echo "<script>window.location='index.php?p=data_kategori'</script>";
?>