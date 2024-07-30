<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_pasien WHERE id_pasien=?");
	$stmt->bind_param("s",mysqli_real_escape_string($mysqli, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		setcookie("info","Data pasien berhasil dihapus",time() + 2,"/");
		echo "<script>window.location='index.php?hal=pasien';</script>";	
	} else {
		echo "<script>alert('Data Pasien Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>