<?php 
// include('../modal/m_pengguna.php');
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "pengaduan";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

	function register($email, $password,$nama)
	{	
		$insert = mysqli_query($this->koneksi,"insert into pengguna values('','$email','$password','$nama')");
		return $insert;
	}
}