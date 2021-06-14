<?php 
include_once('../controller/c_PReg.php');
$database = new database();
if(isset($_POST['register']))
{
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if($database->register($email, $password, $nama))
    {
      header('location:v_Plogin.php');
    }
}

?>

<!-- DESIGN UI  -->
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Pengguna</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="jquery.js"></script>


<!-- STYLE -->
<style>
    body{
      background: linear-gradient(to right, #683b58, #9d587a, #e980a4,#f6adc5 ); 
    }

    nav{
      background: linear-gradient(to right, #f6adc5,#8a4a65 );
      border-radius: 10px;
      
    }
  </style>
</head>

<body class="p-3 mb-2 text-white">
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand h4 mb-1 text-white" href="#">DAFTAR PENGGUNA</a>


    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link  text-white" href="v_PLogin.php">Masuk <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link  text-white" href="v_PReg.php">Daftar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link  text-white" href="v_LandingB.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <a class="navbar-brand h4 mb-1 text-white" href="#" align="right">For Womens</a>
  </div>
</nav>

<!-- Container -->
  <div class="container py-5">
  <img src="img/daftar.svg" height="500px" width="500px" align="right" >

    <h1 >Daftar</h1>
    <p class="lead">Daftarkan Identitas Anda untuk mengadu</p>
    <hr/>
    <div class="row">
    <div class="col-lg-7">
<!-- FORM -->
        <form class="mb-5" method="post" action="" style="margin-left:0px">
          <div class="form-group">

          <!-- NAMA  -->
          <div class="form-group">
            <h6>Nama</h6>
            <div class="col-sm-20">
              <input type="text" class="form-control mb-1" id="nama" name="nama" placeholder="Masukan Nama">
            </div>
          </div>

          <!-- EMAIL -->
          <div class="form-group">
                <h6>Email</h6>
                <div class="col-sm-20">
                    <input type="text" class="form-control mb-1" id="email" name="email" placeholder="Masukan Email">
                </div>
          </div>
      

          <!-- PASSWORD  -->
          <div class="form-group">
            <h6>Password</h6>
            <div class="col-sm-20">
              <input type="password" class="form-control mb-1" id="password" name="password" placeholder="Buat password">
            </div>
          </div>

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
          <button type="submit" class="btn btn-danger btn-block" name="register">Daftar</button>
          </div>
        </div>
    </form>

        <!-- TEXT   -->   
        <div class="px-2 bg-transparan ">
        <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10" behavior="alternate">
          Welcome to our website Girls! Please login your account to enjoy our services. Be the strong women and join with us to against crime and violances!
        </marquee>
      </div>


   </div>
  </div>
</div>
</body>
</html>