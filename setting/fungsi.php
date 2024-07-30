<?php

// Upload gambar untuk mengunggah gambar ke server, menyimpan gambar dalam ukuran aslinya, dan membuat versi kecil dari gambar
function UploadImage($fupload_name, $lokasi, $name){

  //Direktori penyimpanan gambar
  $vdir_upload = "$lokasi/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["$name"]["tmp_name"], $vfile_upload);

  //Identitas ukuran gambar asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Tentukan ukuran gambar versi kecil (small)
  $dst_width = 150;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //Proses perubahan ukuran gambar
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar versi kecil
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}

//Upload file 
function UploadFile($fupload_name, $lokasi, $name){

  //Direktori penyimpanan file
  $vdir_upload = "$lokasi/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan file
  move_uploaded_file($_FILES["$name"]["tmp_name"], $vfile_upload);

}

// Fungsi untuk engecek apakah suatu nilai sama dengan nilai yang diharapkan, dan mengembalikan string "selected" jika benar.
function isselect($x,$y){
  if($x==$y){
    echo "selected";
  }else{
    echo "";
  }
}

// Fungsi untuk mengubah status menjadi label dengan warna tertentu
function warna($status){
  switch ($status) {
    case 'daftar':
    return "<span class='badge badge-primary'>Daftar</span>";
    break;

    case 'lulus':
    return "<span class='badge badge-success'>Lulus</span>";
    break;

    case 'gagal':
    return "<span class='badge badge-danger'>Gagal</span>";
    break;
      
    default:
      
    break;
    }
  }
?>
