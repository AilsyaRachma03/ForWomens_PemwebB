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

    <title>Data Kota</title>

   <!-- Custom fonts for this template -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">UTS Pemrograman Website-1007</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="../view/v_home.php">Dashboard<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="tambah.php">Tambah Data Kota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Landing</a>
                    </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
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

                    <br>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kota Seluruh Dunia</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                <!-- KOLOM TABEL -->
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Korban</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Keluhan</th>
                                            <th>No telp</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jenis Kekerasan</th>
                                            <th>File Bukti</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $page = (isset($_GET['page']))? $_GET['page'] : 1;
                                    $limit = 10000; 
                                    $limit_start = ($page - 1) * $limit;
                                    $no = $limit_start + 1;
                                    $query_mysql = mysqli_query($con, "SELECT * FROM aduan LIMIT $limit_start, $limit");
                                    while($data = mysqli_fetch_array($query_mysql)){

                                    ?>
                                        <tr>
                                        <td ><?php echo $no++; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['email']; ?></td> 
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['keluhan']; ?></td>
                                        <td><?php echo $data['telp']; ?></td>
                                        <td><?php echo $data['kelamin']; ?></td>
                                        <td><?php echo $data['jenis']; ?></td>
                                        <td><?php echo $data['file']; ?></td>
                                        <td>
                                          <a class="btn btn-dark" href="ubah.php?id=<?php echo $data['ID']; ?>">Ubah</a>
                                          <a class="btn btn-secondary" href="hapus.php?id=<?php echo $data['ID']; ?>">Hapus</a>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 192410101007 Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script language="javascript">
        $(document).ready(function() {
            $('#example').dataTable( {
                "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
            } );
        } );
    </script>

</body>

</html>

                    