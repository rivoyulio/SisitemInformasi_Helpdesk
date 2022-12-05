<?php
$koneksi=mysqli_connect("localhost","root","","kominfo");
//menyimpan data id kedalam variabel
$pengaduan =$_GET['id_pengaduan'];
//query SQL untuk insert data
$query="Delete from pengaduan where id_pengaduan='$pengaduan'";
mysqli_query($koneksi, $query);
//mengalihkan kehalaman index.php
 echo "<script>window.location='index.php?p=data_penanganan'</script>";
?>