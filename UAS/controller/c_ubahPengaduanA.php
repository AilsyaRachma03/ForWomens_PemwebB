<?php
include('../modal/m_dbPengaduan.php');
if(isset($_POST['perbarui']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    $telp = $_POST['telp'];
    $kelamin = $_POST['kelamin'];
    $result = mysqli_query($con, "UPDATE aduan SET nama='$nama',email='$email',alamat='$alamat',keluhan='$keluhan',telp='$telp',kelamin='$kelamin' where id=$id");
    header("location:v_AdminPengaduan.php");
}
?>
