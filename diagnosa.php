<?php
include("setting/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosa Virus Kucing</title>
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
            </div>
        </nav>
        <!-- End Navbar -->

        <section id="konsultasi" style="margin-top: 30px; margin-bottom: 30px;">
            <div class="container p-3 my-3 border" style="border-radius: 10px; border-style: inset; align-items: center; width: 800px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.5); ">
                <h2 colspan="2" align=center style="font-weight: bold; color: #a162b1">Konsultasi Penyakit Pada Kucing</h2>
                <br>
                <form action="hasil_diagnosa.php" method="post">
                    <div class="mb-3">
                        <label for="nm_pasien" class="form-label">Nama Kucing:</label><br>
                            <input type="text" class="form-control" id="nm_pasien" name="nm_pasien" placeholder="Masukkan nama kucing" required>
                    </div>
                    <div class="mb-3">
                        <label for="usia" class="form-label">Usia Kucing:</label><br>
                            <input type="text" class="form-control" id="usia" name="usia" placeholder="Masukkan usia kucing" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Kucing:</label><br>
                            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan jenis kucing" required>
                    </div>
                    <?php
                    // Query untuk mendapatkan daftar gejala
                    $query = "SELECT * FROM tb_gejala";
                    $result = $mysqli->query($query);
        
                    // Menampilkan opsi gejala dalam formulir
                    while($row = $result->fetch_assoc()) {
                        echo "<input type='checkbox' name='gejala[]' value='" . $row['id_gejala'] . "'> " . $row['nm_gejala'] . "<br>";
                    }
                    ?>
                    <br>
                    <input class="btn btn-default" style="background-color: #a162b1; border-radius: 6px; color: white;" type="submit" name="submit" value="Konsultasi">
                    <a href="index.php" style="border: 2px solid #a162b1; color: #a162b1;" class="btn btn-default">
                        Kembali
                    </a>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
