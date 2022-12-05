<?php
$koneksi=mysqli_connect("localhost","root","","db_helpdesk");
//menyimpan data id kedalam variabel
$id_bagian =$_GET['id_bagian'];
//query SQL untuk insert data
$query="Delete from bagian where id_bagian='$id_bagian'";
mysqli_query($koneksi, $query);
//mengalihkan kehalaman index.php
 echo "<script>window.location='index.php?p=operator'</script>";
?>