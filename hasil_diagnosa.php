<?php
include("setting/koneksi.php");

if(isset($_POST['submit'])) {
    
    // Mendapatkan data pasien
    $nm_pasien = $_POST['nm_pasien'];
    $usia = $_POST['usia'];
    $jenis = $_POST['jenis'];

    // Mendapatkan gejala yang dipilih oleh pengguna
    $gejala_terpilih = isset($_POST['gejala']) ? $_POST['gejala'] : array();

    // Array untuk menyimpan daftar penyakit
    $penyakit = array();

    // Melakukan pemeriksaan aturan untuk setiap gejala yang dipilih
    foreach($gejala_terpilih as $gejala) {
        // Query untuk mendapatkan penyakit berdasarkan gejala yang dipilih
        $query = "SELECT id_penyakit FROM tb_aturan WHERE id_gejala='$gejala'";
        $result = $mysqli->query($query);

        // Menyimpan hasil query ke dalam array penyakit
        while($row = $result->fetch_assoc()) {
            $penyakit[] = $row['id_penyakit'];
        }
    }

    // Menghitung frekuensi setiap penyakit
    $jumlah_penyakit = array_count_values($penyakit);

    // Array untuk menyimpan penyakit yang sesuai 100% dengan gejala yang dipilih
    $penyakit_final = array();

    // Menentukan penyakit yang sesuai 100% dengan gejala yang dipilih
    foreach($jumlah_penyakit as $id_penyakit => $jumlah) {
        if($jumlah == count($gejala_terpilih)) {
            // Menambahkan penyakit yang sesuai ke dalam array penyakit_final
            $penyakit_final[] = $id_penyakit;
        }
    }

    // Menyimpan hasil diagnosa ke dalam tabel tb_pasien
    $tanggal = date('Y-m-d');
    $gejala = implode(",", $gejala_terpilih);

    if(!empty($penyakit_final)) {
        $penyakit_diagnosa = array();
        foreach($penyakit_final as $id_penyakit) {
            // Query untuk mendapatkan detail penyakit
            $query = "SELECT nama_penyakit, definisi, pengobatan FROM tb_penyakit WHERE id_penyakit='$id_penyakit'";
            $result = $mysqli->query($query);
            $row = $result->fetch_assoc();
            $penyakit_diagnosa[] = $row['nama_penyakit'];
            $penyakit_definisi[] = $row['definisi'];
            $penyakit_pengobatan[] = $row['pengobatan'];
        }
        $penyakit = implode(",", $penyakit_diagnosa);
    } else {
        // Jika tidak ditemukan penyakit yang sesuai, ambil data penyakit dengan id_penyakit = 'P00'
        $query = "SELECT nama_penyakit, definisi, pengobatan FROM tb_penyakit WHERE id_penyakit='P00'";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        $penyakit_diagnosa = array($row['nama_penyakit']);
        $penyakit_definisi = array($row['definisi']);
        $penyakit_pengobatan = array($row['pengobatan']);
        $penyakit = $row['nama_penyakit'];
    }

    // Query untuk menyimpan hasil diagnosa
    $query_simpan = "INSERT INTO tb_pasien (nm_pasien, usia, jenis, gejala, penyakit, tanggal) 
                      VALUES ('$nm_pasien', '$usia', '$jenis', '$gejala', '$penyakit', '$tanggal')";
    $mysqli->query($query_simpan);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosa Virus Kucing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <div class="all-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#" id="logo">
                    <img src="gambar/logo.png" alt="" width="40" height="40" class="d-inline-block">
                        ChYCat
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- End Navbar -->

        <section id="konsultasi" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="container p-3 my-3 border" style="border-radius: 10px; border-style: inset; align-items: center; width: 800px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5); ">
                <h2 align=center style="font-weight: bold; color: #852b9b">Hasil Diagnosa</h2>
                <br>
                <h4 style="font-weight: bold; color: #852b9b">Data Pasien:</h4>
                <p>Nama Kucing: <?php echo htmlspecialchars($nm_pasien); ?></p>
                <p>Usia Kucing: <?php echo htmlspecialchars($usia); ?></p>
                <p>Jenis Kucing: <?php echo htmlspecialchars($jenis); ?></p>

                <h4 style="font-weight: bold; color: #852b9b">Gejala yang Dialami:</h4>
                <?php
                foreach($gejala_terpilih as $gejala) {
                    // Query untuk mendapatkan nama gejala
                    $query_gejala = "SELECT nm_gejala FROM tb_gejala WHERE id_gejala='$gejala'";
                    $result_gejala = $mysqli->query($query_gejala);
                    $row_gejala = $result_gejala->fetch_assoc();
                    $gejala_nama_list[] = $row_gejala['nm_gejala'];
                }
                echo "<p>" . implode(", ", $gejala_nama_list) . "</p>";
                ?>

                <h4 style="font-weight: bold; color: #852b9b">Penyakit yang Mungkin Diderita:</h4>
                <?php
                if (!empty($penyakit_final)) {
                    foreach($penyakit_diagnosa as $index => $penyakit) {
                        echo "<h5>" . htmlspecialchars($penyakit) . "</h5>";
                        echo "<p><strong>Definisi:</strong> " . htmlspecialchars($penyakit_definisi[$index]) . "</p>";
                        echo "<p><strong>Pengobatan:</strong> " . htmlspecialchars($penyakit_pengobatan[$index]) . "</p>";
                    }
                } else {
                    echo "<h5>" . htmlspecialchars($penyakit_diagnosa[0]) . "</h5>";
                }
                ?>
                <a href="diagnosa.php" class="btn btn-default" style="background-color: #a162b1; border-radius: 6px; color: white;">Kembali</a>
            </div>
        </section>
    </div>
</body>
</html>
