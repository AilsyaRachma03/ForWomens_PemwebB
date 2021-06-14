<?php
    include('../controller/c_TambahPengaduan_A.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="description" content="">
    <meta name="author" content=""> -->

    <!-- <title>Tambah Kota</title> -->

    <!-- Custom fonts for this template-->
    <!-- <link href="uts/../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="view/../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        nav{
            background: linear-gradient(to right,#206a5d, #16a596);      
        }
        .btn{
            background: #28b5b5;
        }
    </style>
</head>

<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-white" href="#">FOR WOMENS</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="../view/v_home.php">Dashboard<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="v_AdminPengaduan.php">Kembali<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    <br>
    <!-- <h1> &nbsp; &nbsp; &nbsp;Report Form</h1> -->
    <h1 class="text-center">Buat Pengaduan Sebagai Admin</h1>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
              <br>
              <br>
              <br>

                <!-- FORM  -->
                <div class="container-fluid">
                  <form action="v_TambahPengaduan_A.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Lengkap</label>
                        <input type="text" name="nama" required="" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" name="email" required="" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" name="alamat" required="" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Kronologi</label>
                        <input type="text" name="keluhan" required="" class="form-control input-sm" placeholder="Kronologi" style=”heigth:100px;”>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telepon</label>
                        <input type="text" name="telp" required="" class="form-control" placeholder="No Telepon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <input type="text" name="kelamin" required="" class="form-control" placeholder="Jenis Kelamin">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kekerasan</label><br>
                        <input type="checkbox" name="jenis[]" value="Pemerkosaan" class=""> Pemerkosaan <br/>
                        <input type="checkbox" name="jenis[]" value="Pelecehan" class=""> Pelecehan <br/>
                        <input type="checkbox" name="jenis[]" value="KDRT" class=""> KDRT <br/>
                        <input type="checkbox" name="jenis[]" value="KekerasanM" class=""> Kekerasan Mental<br/>
                        <input type="checkbox" name="jenis[]" value="Diskriminasi" class=""> Diskriminasi <br/>
                        <input type="checkbox" name="jenis[]" value="Pengucilan" class=""> Pengucilan <br/>
                        <input type="checkbox" name="jenis[]" value="Penipuan" class=""> Penipuan <br/>
                        <input type="checkbox" name="jenis[]" value="KekerasanF" class=""> Kekerasan Fisik <br/>
                    </div>
                    <div class="form-group">
                        <label for="">Bukti Gambar</label>
                        <input type="file" name="gambar">
                    </div>

                    <input type="submit" name="Submit" value="Adukan" class="btn btn-primary"></input>
                  </form>


                <?php
                if(isset($_POST['Submit'])){
                //   $nama = $_POST['nama'];
                //   $email = $_POST['email'];
                //   $alamat = $_POST['alamat'];
                //   $keluhan = $_POST['keluhan'];
                //   $telp = $_POST['telp'];
                //   $kelamin = $_POST['kelamin'];
                //   $jenis =implode(', ' , $_POST['jenis']);
                //   $nama_file= $_FILES['gambar']['name'];
                //   $source=$_FILES['gambar']['tmp_name'];
                //   $folder='../upload/';

                //   move_uploaded_file($source, $folder.$nama_file);
                //   $insert =mysqli_query($con, "INSERT INTO aduan VALUES(NULL, '$nama', '$email', '$alamat', '$keluhan', '$telp','$kelamin', '$jenis', '$nama_file')");
                  echo "Data Berhasil Ditambahkan";
                }
               ?>

                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; For Womens Website 2021</span>
                    </div>
                </div>
            </footer>


        </div>

    </div>

</body>
</html>      
