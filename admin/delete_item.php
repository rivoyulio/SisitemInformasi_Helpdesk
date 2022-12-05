<?php
$koneksi=mysqli_connect("localhost","root","","db_helpdesk");
//menyimpan data id kedalam variabel
$item_masalah =$_GET['id_item_masalah'];
//query SQL untuk insert data
$query="Delete from item_masalah where id_item_masalah='$item_masalah'";
mysqli_query($koneksi, $query);
//mengalihkan kehalaman index.php
 echo "<script>window.location='index.php?p=data_item'</script>";
?>