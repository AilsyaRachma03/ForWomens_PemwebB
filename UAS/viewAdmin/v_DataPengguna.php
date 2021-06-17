<?php 
    include('../modal/m_dbPengaduan.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Data Pengguna</title>

    <!-- Custom fonts for this template -->
    <link href="uts/../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="uts/../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="uts/../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        
        #kolom{
            background: linear-gradient(to right,#d2e69c,#8fd9a8, #28b5b5, #4b778d ); 
            }

        nav{
            background: linear-gradient(to right,#206a5d, #16a596);      
        }
        .btn{
            background: #d2e69c;
        }
    </style>
</head>

<body >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <a class="btn btn-primary" href="tambah.php">Tambah Data</a> -->


                    <br>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4" >
                        <div class="card-header py-3" id="kolom">
                            <h6 class="m-0 font-weight-bold text-dark" >Data Pengguna</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama </th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $page = (isset($_GET['page']))? $_GET['page'] : 1;
                                    $limit = 10000; 
                                    $limit_start = ($page - 1) * $limit;
                                    $no = $limit_start + 1;
                                    $query_mysql = mysqli_query($con, "SELECT * FROM pengguna LIMIT $limit_start, $limit");
                                    while($data = mysqli_fetch_array($query_mysql)){

                                    ?>
                                        <tr>
                                        <td ><?php echo $no++; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['email']; ?></td> 
                                        <td><?php echo $data['password']; ?></td>
                                        <td>
                                          <!-- <a class="btn btn-dark" href="ubah.php?id=<?php echo $data['id']; ?>">Ubah</a> -->
                                          <a class="btn" href="../controller/c_hapusPengguna_A.php?id=<?php echo $data['id']; ?>">Hapus</a>
                                        </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
            <!-- End of Footer -->


    <!-- Bootstrap core JavaScript-->
    <script src="uts/../vendor/jquery/jquery.min.js"></script>
    <script src="uts/../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="uts/../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="uts/../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="uts/../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="uts/../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="uts/../js/demo/datatables-demo.js"></script>
    <script language="javascript">
        $(document).ready(function() {
            $('#example').dataTable( {
                "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
            } );
        } );
    </script>

</body>
</html>

                    