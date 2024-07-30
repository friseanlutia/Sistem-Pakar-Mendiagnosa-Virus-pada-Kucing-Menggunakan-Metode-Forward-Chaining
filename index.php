<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Virus Kucing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
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
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#penyakit">Daftar Penyakit</a>
                    </li>
                    </ul>
                    <a class="btn-login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="login.php">Login<span class="sr-only"></span></a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
      
        <!-- Home Section -->
        <section id="home">
            <div class="content">
                <h3>Periksa Virus Kucing<br>di ChYCat</h3><br>
                <a class="button" href="diagnosa.php">Konsultasi</a>
            </div>
        </section>
        <!-- End Home Section -->

        <!-- About Section -->
        <section id="about">
            <div class="container">
                <div class="heading">ABOUT</div>
                    <div class="row">
                        <div class="col-md-6">
                            <img width="450" src="gambar/g1.png" alt="">    
                        </div>
                        <div class="col-md-6">
                            <h2>What is ChYCat</h2>
                            <p>ChYCat adalah singkatan dari "Check Your Cat" yang merupakan sistem informasi berbasis web yang memanfaatkan teknologi sistem pakar untuk mendiagnosa penyakit kucing yang disebabkan oleh virus.
                                Diagnosa didapatkan dari gejala-gejala penyakit yang sebelumnya telah dikonsultasikan dengan seorang pakar. 
                                <br><br>Sistem ini dijalankan dengan mengenali gejala yang timbul pada kucing dengan menjawab pertanyaan yang diberikan oleh sistem, kemudian didapatkan hasil berupa nama penyakit dan juga solusi atau penanganan pertama terhadap kucing.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Penyakit Section -->
        <section id="penyakit">
            <div class="container">
                <div class="heading">DAFTAR PENYAKIT</div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" style="margin-left: 20px;">

    
                    <div class="col" style="width:425px;">
                        <div class="card shadow-sm">
                        <img src="gambar/pv.jpg" class="card-img-top" height="" alt="...">
                            <div class="card-body" style="color: #852b9b;">
                                <h4 class="card-title">Feline Panleukopenia Virus</h4>
                                <p class="card-text">Merupakan infeksi virus yang disebabkan oleh Feline Parvovirus, menyerang sel-sel di saluran usus, sumsum tulang, kulit, jaringan limfatik, serta sel induk janin yang sedang berkembang, serta mukosa gastrointestinal yang dapat menyebabkan enteritis disertai penurunan jumlah leukosit.</p>
                            </div>    
                        </div>
                    </div>

                    <div class="col" style="width:425px">
                        <div class="card shadow-sm">
                        <img src="gambar/rv.jpg" class="card-img-top" height="" alt="...">
                            <div class="card-body" style="color: #852b9b;">
                                <h4 class="card-title">Feline Viral Rhinotracheitis </h4>
                                <p class="card-text">Merupakan virus yang yang disebabkan oleh felid virus herpes 1 (FeHV-1) yang mengakibatkan infeksi pada saluran pernafasan kucing.</p>
                            </div>    
                        </div>
                    </div>

                    <div class="col" style="width:425px">
                        <div class="card shadow-sm">
                        <img src="gambar/cv.jpeg" class="card-img-top" height="" alt="...">
                            <div class="card-body" style="color: #852b9b;">
                                <h4 class="card-title">Feline Calicivirus Virus</h4>
                                <p class="card-text">Merupakan infeksi virus yang menyerang saluran pernapasan, mulut, dan mata pada kucing. Pada kucing betina yang sedang hamil, penyakit ini dapat menyebabkan cacat pada janin dan bahkan dapat menyebabkan keguguran.</p>
                            </div>    
                        </div>
                    </div>

                    <div class="col" style="width:350">
                        <div class="card shadow-sm">
                        <img src="gambar/ip.jpg" class="card-img-top" height="" alt="...">
                            <div class="card-body" style="color: #852b9b;">
                                <h4 class="card-title">Feline Infectious Peritonitis</h4>
                                <p class="card-text">Merupakan hasil mutasi dari Feline Coronavirus (FCoV), yang merupakan salah satu infeksi virus pada kucing yang dapat menular ke sesama kucing. Infeksi virus ini tidak memiliki kemampuan untuk menular ke manusia, anjing, atau spesies lainnya.</p>
                            </div>    
                        </div>
                    </div>

                    <div class="col" style="width:350">
                        <div class="card shadow-sm">
                        <img src="gambar/r.jpg" class="card-img-top" height="" alt="...">
                            <div class="card-body" style="color: #852b9b;">
                                <h4 class="card-title">Rabies</h4>
                                <p class="card-text">Merupakan virus ysng ditularkan melalui gigitan hewan yang terkena rabies, dengan menyerang susunan sistem saraf pusat dan mempengaruhi inangnya hingga tidak terkendali dan jika sudah terinfeksi virus ini, biasanya akan berujung kepada kematian.</p>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>