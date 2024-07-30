<?php
//Koneksi ke database
$host = "localhost"; 
$username = "root";
$password = "";
$db_name = "sispak-kucing";

//Koneksi ke basis data
$mysqli = new mysqli($host, $username, $password, $db_name);

//Cek koneksi ke basis data
if(mysqli_connect_errno()) {
	echo "Error: Tidak terhubung ke database";
	exit;
	}
?>