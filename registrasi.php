<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
   <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <title>login</title>
</head>
<br>
<body style="background-color:#4e73df;">
    <form action="registrasi_action.php" method="POST">
        <div class="container">
            <div class="row ">
                <div class="col">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <strong>
                                <h1> Form Registrasi
                            </strong></h1>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-6">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username">
                                </div>
                                <div class="mb-6">
                                    <label for="Nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="Nama">
                                </div>
                                <div class="mb-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="exmaple@">
                                </div>
                                <div class="mb-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <br>
                                <div class="d-grid gap-2">
                                    <button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">Create Account</button>
                                </div>
                                <br>
                                <div class="d-grid gap-2">
                                    <button style="color: white;" type="reset"class="btn btn-danger">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </form>


      <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>