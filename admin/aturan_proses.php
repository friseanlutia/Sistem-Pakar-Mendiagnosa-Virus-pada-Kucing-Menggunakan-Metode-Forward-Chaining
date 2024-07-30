<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['tambah']))
{	

//Proses penambahan gejala
	$stmt = $mysqli->prepare("INSERT INTO tb_aturan 
		(id_gejala,id_penyakit) 
		VALUES (?,?)");

	$stmt->bind_param("ss", 
		mysqli_real_escape_string($mysqli, $_POST['id_gejala']),
		mysqli_real_escape_string($mysqli, $_POST['id_penyakit']));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Aturan Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=aturan_olah&id=".$_POST['id_penyakit']."';</script>";	
	} else {
		echo "<script>alert('Data aturan Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_aturan where id_aturan=?");
	$stmt->bind_param("s",mysqli_real_escape_string($mysqli, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data aturan Berhasil Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	} else {
		echo "<script>alert('Data Pegawai Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>