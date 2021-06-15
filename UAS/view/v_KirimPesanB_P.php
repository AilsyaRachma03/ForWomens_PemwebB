<?php
    include('../controller/c_KirimPesanB_P.php');
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
            background: linear-gradient(to right,#9d587a, #f6adc5);      
        }
        .btn{
            background: #9d587a;
        }
    </style>
</head>

<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"> Send Message</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link scrollto active" href="../view/v_LandingB.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="../view/v_LandingB.php">About</a></li>
                    <li><a class="nav-link scrollto" href="../view/v_LandingB.php">Services</a></li>
                    <li><a class="nav-link scrollto" href="../view/v_KirimPesanB_P.php">Contact</a></li>
                    </ul>
                </ul>
            </div>
        </nav>
    <br>
    <h1> &nbsp; &nbsp; &nbsp;Send Message</h1>
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
                  <form action="v_KirimPesanB_P.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Lengkap</label>
                        <input type="text" name="nama" required="" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" name="email" required="" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi Pesan</label>
                        <input type="text" name="isipesan" required="" class="form-control" placeholder="Isikan Pesan">
                    </div>

                    <input type="submit" name="Submit" value="Kirim" class="btn btn-primary btn-lg btn-block"></input>
                  </form>


                <?php
                if(isset($_POST['Submit'])){
         
                  echo "<h5>Pesan Berhasil Dikirim</h5>";
                }
               ?>

                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
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
