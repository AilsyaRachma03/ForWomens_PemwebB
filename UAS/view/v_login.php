<?php 
session_start();
include_once('../controller/c_login.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:v_home.php');
}

if(isset($_COOKIE['email']))
{
  $database->relogin($_COOKIE['email']);
  header('location:v_home.php');
}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($email,$password,$remember))
    {
      header('location:v_home.php');
    }
}
?>


<!-- UI  -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <title>Masuk | Admin </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
    <a class="navbar-brand h4 mb-1 text-white" href="#">ADMIN</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <li class="nav-item active">
        <a class="nav-link text-white" href="v_login.php">Masuk <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="v_register.php">Daftar <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#" > Banyak Tugas ? <span class="sr-only">(current)</span></a>
        </li> -->
    </ul>

  </div>
</nav>

    <!-- Container  -->
    <div class="container py-4">
    <h1 class="h2 mb-3 font-weight-normal" style="margin-left:170px"><b>Masuk</b></h1>
    <img src="img/secure.svg" height="500px" width="500px" align="right"  >
    <div class="row">
    <div class="col-lg-8">

      <form method="post" class="mb-5" action="" style="margin-left: 0px">
        <div class="form-group">
          <!-- USERNAME  -->
          <br>
          <h5>Email</h5>
          <input type="text" class="form-control mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" >
        </div>

        <!-- PASSOWORD  -->
        <div class="form-group">
          <h5>Password</h5>
          <input type="password" class="form-control mb-1" id="password" placeholder="Password" name="password" >
          <!-- Check Pw -->
          <p> <input type="checkbox" class="form-checkbox"> Tampilkan Password </p>
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
        </div>

        <!-- REMEMBER ME   -->
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" name="remember"> Ingat Saya
          </label>
        </div>
        <br>

        <!-- BUTTON   -->
        <button class="btn btn-lg btn-info btn-block" type="submit" name="login">Masuk</button>
        <a href="v_register.php" class="btn btn-lg btn-warning btn-block" > Daftar</a>

  </form>
  </div>
  </div>
</body>
</html>