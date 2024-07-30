<?php
	//Mengonversi tanggal dari format Indonesia ke format database standar (Y-m-d)
	function tgl_db($tgl){
			$tgl		= date_create($tgl);
			$tanggal	= date_format($tgl,"Y-m-d");
			return $tanggal;		 
	}
	
	//Mengonversi tanggal dari format database standar ke format Indonesia (d-m-Y)
	function tgl_indo($tgl){
			$tgl		= date_create($tgl);
			$tanggal	= date_format($tgl,"d-m-Y");
			return $tanggal;		 
	}

?>