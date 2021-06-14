<?php
include('../modal/m_dbPengaduan.php');


$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM aduan WHERE id=$id");

header("location:../viewAdmin/v_AdminPengaduan.php");
?>