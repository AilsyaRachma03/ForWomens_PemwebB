<?php
    include('../modal/m_dbPengaduan.php');
?>

<?php
                if(isset($_POST['Submit'])){
                  $nama = $_POST['nama'];
                  $email = $_POST['email'];
                  $isipesan = $_POST['isipesan'];

                  $insert =mysqli_query($con, "INSERT INTO pesan VALUES(NULL, '$nama', '$email', '$isipesan')");
                }
?>