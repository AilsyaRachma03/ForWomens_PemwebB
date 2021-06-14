<?php
    include('../modal/m_dbPengaduan.php');
?>

<?php
                if(isset($_POST['Submit'])){
                  $nama = $_POST['nama'];
                  $email = $_POST['email'];
                  $alamat = $_POST['alamat'];
                  $keluhan = $_POST['keluhan'];
                  $telp = $_POST['telp'];
                  $kelamin = $_POST['kelamin'];
                  $jenis =implode(', ' , $_POST['jenis']);
                  $nama_file= $_FILES['gambar']['name'];
                  $source=$_FILES['gambar']['tmp_name'];
                  $folder='../upload/';

                  move_uploaded_file($source, $folder.$nama_file);
                  $insert =mysqli_query($con, "INSERT INTO aduan VALUES(NULL, '$nama', '$email', '$alamat', '$keluhan', '$telp','$kelamin', '$jenis', '$nama_file')");
                //   echo "Data Berhasil Ditambahkan";
                }
?>