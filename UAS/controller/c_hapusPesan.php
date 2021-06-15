<?php
include('../modal/m_dbPengaduan.php');


$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM pesan WHERE id=$id");

header("location:../viewAdmin/v_DataPesan.php");
?>