<?php

$user ="localhost";
$name ="root";
$password = "";
$db = "pengaduan";

$con =mysqli_connect($user, $name, $password, $db);
if (!$con){
    die("Database Tidak Ditemukan" . mysqli_connect_error());
}
?>