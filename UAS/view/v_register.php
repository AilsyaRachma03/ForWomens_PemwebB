<?php 
include_once('../controller/c_register.php');
$database = new database();
if(isset($_POST['register']))
{
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $bidang = $_POST['bidang'];
    if($database->register($email, $password, $nama, $no_telp, $bidang))
    {
      header('location:v_login.php');
    }
}

?>

<!-- UI  -->
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- <meta name="description" content=""> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="jquery.js"></script>
  

  <!-- STYLE -->
<style>
    body{
      background: linear-gradient(to right, #4b778d, #28b5b5, #8fd9a8,#d2e69c); 
      /* background-color: #ff959f; */
    }

    nav{
      background: linear-gradient(to right,#92967d,#c8c6a7, white);
      border-radius: 10px;
    }

</style>
</head>

<body class="p-3 mb-2 bg-dark text-white">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand h4 mb-1 text-white"c href="#">ADMIN</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item active">
        <a class="nav-link text-white" href="v_login.php">Masuk <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="v_register.php">Daftar <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

    <!-- Container  -->
  
  <div class="container py-5">
  <!-- class="mt-5" -->
    <h1 >Daftar</h1>
    <p class="lead">Daftarkan Identitas Anda</p>
    <hr/>
    <img src="img/city.svg" height="500px" width="500px" align="right" style="margin:100px, 100px,0, 0;">
    <div class="row">
    <div class="col-lg-10">

        <form class="mb-5" method="post" action="">
          <div class="form-group">

          <!-- NAMA  -->
          <div class="form-group">
            <h6>&nbsp; &nbsp; Nama</h6>
            <div class="col-sm-10">
              <input type="text" class="form-control mb-1" id="nama" name="nama" placeholder="Masukan Nama">
            </div>
          </div>


          <!-- NIM  -->
          <div class="form-group">
            <h6>&nbsp; &nbsp;  No Telepon</h6>
            <div class="col-sm-10">
              <input type="text" class="form-control mb-1" id="no_telp" name="no_telp" placeholder="Masukan No.Telepon">
            </div>
          </div>


          <!-- BAGIAN BIDANG  -->
            <h6>&nbsp; &nbsp; Div.Bidang</h6>
              <div class="col-sm-10">
                <input type="text" class="form-control mb-1" id="bidang" name="bidang" placeholder="Masukan Divisi Bidang">
              </div>
          </div>


          <!-- EMAIL -->
          <div class="form-group">
                <h6>&nbsp; &nbsp; Email</h6>
                <div class="col-sm-10">
                    <input type="text" class="form-control mb-1" id="email" name="email" placeholder="Masukan Email">
                </div>
          </div>
      

          <!-- PASSWORD  -->
          <div class="form-group">
            <h6>&nbsp; &nbsp; Password</h6>
            <div class="col-sm-10">
              <input type="password" class="form-control mb-1" id="password" name="password" placeholder="Buat password">
            </div>
          </div>

        <!-- class="form-checkbox" -->
        <!-- Check Pw -->
        <div style="margin-left:30px;">
          <p> <input type="checkbox" class="form-checkbox">&nbsp; Tampilkan Password</p>
        </div>
        <!-- Check Password -->
        <script type="text/javascript">
                      $(document).ready(function(){		
                        $('.form-checkbox').click(function(){
                          if($(this).is(':checked')){
                            $('#password').attr('type','text');
                          }else{
                            $('#password').attr('type','password');
                          }
                        });
                      });
                    </script>

        <!-- BUTTON   -->
        <div class="form-group">
          <div class="col-sm-10">
          <button type="submit" class="btn btn-info btn-block" name="register">Daftar</button>
            <a href="v_login.php" class="btn btn-warning btn-block">Masuk</a>
            
          </div>
        </div>

    </form>
   </div>
  </div>
</div>
<!-- </main> -->

<!-- class="col-sm-2 col-form-label" -->
</body>
</html>