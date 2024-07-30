<?php

// Fungsi untuk menghasilkan kode otomatis berdasarkan pola tertentu
function KodeOtomatis($conn, $tabel, $id, $inisial, $index, $panjang)
{
  // Query untuk mengambil nilai maksimum dari kolom id dengan pola tertentu
  $query	= "SELECT max(".$id.") as max_id FROM `".$tabel."` WHERE ".$id." LIKE '".$inisial."%'";
  // Eksekusi query dan ambil hasilnya
  $data		= $conn->query($query)->fetch_array();
  // Ambil nilai maksimum dari hasil query
  $id_max	= $data['max_id'];
  
  // Hitung nomor urut baru berdasarkan nilai maksimum yang ada
  if($index=='' && $panjang=='')
  {
    $no_urut	= (int) $id_max;
    }else if($index!='' && $panjang==''){
      $no_urut    = (int) substr($id_max, $index);
    }else{
      $no_urut	= (int) substr($id_max, $index, $panjang);
    }
    $no_urut	= $no_urut + 1;

    // Bentuk kode baru berdasarkan nomor urut yang dihasilkan
    if($index=='' && $panjang=='')
    {
      $id_baru  = $no_urut;
    }else if($index!='' && $panjang==''){
      $id_baru  = $inisial . $no_urut;
    }else{
      $id_baru	= $inisial . sprintf("%0$panjang"."s", $no_urut);
  }
  return $id_baru;
}

// Fungsi untuk mengambil data sebagai array hasil query
function DataArray ($mysqli,$qry){
  $query = $qry;
  $result = $mysqli->query($query);
  $num_results = $result->num_rows;
  if($num_results > 0){
    return $result;
  }else{
    return "";
  }
}

// Fungsi untuk mengambil data tunggal (single data) dari database
function SingleData($conn,$kolom,$table){
  $row = $conn->query("SELECT $kolom FROM $table")->fetch_array();
  return $row[0];
}

// Fungsi untuk mengambil satu baris data dari tabel database berdasarkan kondisi tertentu
function ArrayData($conn,$table,$kondisi){
  $row = $conn->query("Select * from $table where $kondisi")->fetch_assoc();
  return $row;
}

// Fungsi untuk menghitung jumlah data dalam sebuah tabel
function JumlahData($conn,$table){
  $row = $conn->query("Select * from $table")->num_rows;
  return $row;
}

// Fungsi untuk mendapatkan nilai dari kolom AUTO_INCREMENT terakhir yang disisipkan ke dalam tabel
function lastinsert($conn,$qry){
  $row = $conn->query($qry)->fetch_array();
  return $row[0];
}

// Fungsi untuk memeriksa apakah data yang dicari ada atau tidak dalam database
function CekExist($conn,$qry){
  $row = $conn->query($qry)->num_rows;
  if ($row> 0){
    return true;
  }else{
    return false;
  }
}
  
// Fungsi untuk mengambil satu data tunggal dari tabel database berdasarkan query tertentu
function caridata($conn,$qry){
  $row = $conn->query($qry)->fetch_array();
  return $row[0];
}
?>