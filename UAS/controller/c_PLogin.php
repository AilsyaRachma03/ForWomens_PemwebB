<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "pengaduan";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

	function login($email,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from pengguna where email='$email'");
		$data_pengguna = $query->fetch_array();
		if(password_verify($password,$data_pengguna['password']))
		{
			
			if($remember)
			{
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_pengguna['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data_pengguna ['nama'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($email)
	{
		$query = mysqli_query($this->koneksi,"select * from pengguna where email='$email'");
		$data_admin = $query->fetch_array();
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $data_pengguna['nama'];
		$_SESSION['is_login'] = TRUE;
	}
 
}

?>