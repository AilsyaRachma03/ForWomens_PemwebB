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


	function register($email, $password,$nama, $no_telp, $bidang )
	{	
		$insert = mysqli_query($this->koneksi,"insert into admin values ('','$email','$password','$nama','$no_telp','$bidang')");
		return $insert;
	}
}
