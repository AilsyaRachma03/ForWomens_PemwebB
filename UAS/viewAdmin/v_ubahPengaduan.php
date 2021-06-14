<?php
include('../controller/c_ubahPengaduanA.php');
// if(isset($_POST['perbarui']))
// {
//     $id = $_POST['id'];
//     $nama = $_POST['nama'];
//     $email = $_POST['email'];
//     $alamat = $_POST['alamat'];
//     $keluhan = $_POST['keluhan'];
//     $telp = $_POST['telp'];
//     $kelamin = $_POST['kelamin'];
//     $result = mysqli_query($con, "UPDATE aduan SET nama='$nama',email='$email',alamat='$alamat',keluhan='$keluhan',telp='$telp',kelamin='$kelamin' where id=$id");
//     header("location:v_AdminPengaduan.php");
// }
?> 

<!-- Tampilan User -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ubah Pengaduan</title>

    <!-- Custom fonts for this template-->
    <link href="uts/../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="uts/../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        #kolom{
            background: linear-gradient(to right,#d2e69c,#8fd9a8, #28b5b5, #4b778d ); 
            /* background-color: #ff959f; */
            }

        nav{
            background: linear-gradient(to right,#206a5d, #16a596);      
        }
        .btn{
            background: #28b5b5;
        }
    </style>
</head>
</head>

<body id="page-top">
    <!-- Navbar  -->
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
                </ul>
            </div>
        </nav>
    <br>
    <h1 class="text-center">Ubah Data Pengaduan</h1>

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

                <!-- UBAH -->
                <?php
include('../modal/m_dbPengaduan.php');
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT id, nama, email, alamat, keluhan, telp, kelamin FROM aduan WHERE id=$id");
while($data = mysqli_fetch_array($result)){
?>
                <div class="container-fluid">
                  <form action="v_ubahPengaduan.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <br>
                        <input type="text" name="nama" required="" value="<?= $data['nama']; ?>" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <br>
                        <input type="text" name="email" required="" value="<?= $data['email']; ?>" placeholder="Country Code">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <br>
                        <input type="text" name="alamat" required="" value="<?= $data['alamat']; ?>" placeholder="District">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Kronologi</label>
                        <br>
                        <input type="text" name="keluhan" required="" value="<?= $data['keluhan']; ?>" placeholder="Population">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telp</label>
                        <br>
                        <input type="text" name="telp" required="" value="<?= $data['telp']; ?>" placeholder="Population">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <br>
                        <input type="text" name="kelamin" required="" value="<?= $data['kelamin']; ?>" placeholder="Population">
                    </div>

                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?> >
                    <input type="submit" name="perbarui" value="Ubah" class="btn btn-primary"></input>
                  </form>
                  </div>
                  <?php
                  }
                  ?>
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
            <!-- End of Footer -->


        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="uts/../vendor/jquery/jquery.min.js"></script>
    <script src="uts/../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="uts/../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="uts/../js/sb-admin-2.min.js"></script>

</body>
</html>      
