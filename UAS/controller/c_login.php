<?php 
// include('../modal/m_admin.php');
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "pengaduan";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	// function register($password,$nama, $no_telp, $bidang, $email)
	// {	
	// 	$insert = mysqli_query($this->koneksi,"insert into admin values ('','$email','$password','$nama', '$no_telp', '$bidang')");
	// 	return $insert;
	// }

	function login($email,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from admin where email='$email'");
		$data_admin = $query->fetch_array();
		if(password_verify($password,$data_admin['password']))
		{
			
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_admin['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data_admin['nama'];
			$_SESSION['no_telp'] = $data_admin['no_telp'];
			$_SESSION['bidang'] = $data_admin['bidang'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($email)
	{
		$query = mysqli_query($this->koneksi,"select * from admin where email='$email'");
		$data_admin = $query->fetch_array();
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $data_admin['nama'];
		$_SESSION['is_login'] = TRUE;
	}
 
}

?>