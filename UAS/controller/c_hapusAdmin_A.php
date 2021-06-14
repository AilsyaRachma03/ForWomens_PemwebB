
<?php
include('../modal/m_dbPengaduan.php');


$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM admin WHERE id=$id");

header("location:../viewAdmin/v_DataAdmin.php");

<?php
include('../modal/m_dbPengaduan.php');


$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM admin WHERE id=$id");

header("location:../viewAdmin/v_DataAdmin.php");

?>