<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      padding-top: 100px;
    }
  </style>
</head>

<body>

  <center>
    <table border=1 cellpadding="6" cellspacing="8">
      <tr>
        <center>
          <th colspan="10" style="font-size:2.3em; text-align:center;">Laporan Tiket Masuk</th>
        </center>
      </tr>
      <tr>
        <th>No</th>
        <th>ID User</th>
        <th>Bagian</th>
        <th>Kategori Masalah</th>
        <th>Item Masalah</th>
        <th style=" text-align:center;">Tanggal</th>
        <th>Status</th>
        <th>Nama User</th>
      </tr>
      <?php
      $no = 1;
      $koneksi = mysqli_connect("localhost", "root", "", "db_helpdesk");
      $query = mysqli_query($koneksi, "SELECT * FROM tiket
                        inner join item_masalah on tiket.id_item_masalah = item_masalah.id_item_masalah
                inner join user on tiket.id_user = user.id_user
                inner join bagian on tiket.id_bagian = bagian.id_bagian
                inner join kategori_masalah on tiket.id_kategori_masalah = kategori_masalah.id_kategori_masalah
         ");
      while ($d = mysqli_fetch_assoc($query)) { ?>
        <tr>
          <td><?php echo $d['id_tiket'] ?></td>
          <td><?php echo $d['id_user'] ?></td>
          <td><?php echo $d['nama_bagian'] ?></td>
          <td><?php echo $d['nama_kategori'] ?></td>
          <td><?php echo $d['nama_item_masalah'] ?></td>
          <td><?php echo $d['tanggal'] ?></td>
          <td><?php echo $d['status'] ?></td>
          <td><?php echo $d['username'] ?></td>
        <?php
      }
        ?>
    </table>
  </center>
  </div>
  </div>
  <br>



  <script src="js/bootstrap.bundle.min.js"></script>





  <!-- DataTables -->
  <script type="text/javascript">
    window.print();

    function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);


      oFReader.onload = function(oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
      };
    };
  </script>

</body>

</html>