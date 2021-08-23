<?php
session_start();

if (!isset($_SESSION["login"]) ){
header("Location: login.php");
exit;
}

require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "primebread");
$result = mysqli_query($conn, "SELECT * FROM menu_produk");

$produk = query("SELECT * FROM menu_produk ORDER BY id DESC");
// tombol cari ditekan
if (isset($_POST["cari"])) {
  $produk = cari($_POST["keyword"]);
}






?>
<!--  akhr php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prime Bread</title>
  <link rel="stylesheet" href="menu.css">
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <a href="stylesheet" href="menu.css"></a>


  </head>

<body>
  <div class="background">

    <body background="gambar/wood_pattern.png">


      <!-- Header -->
      <div class="container">
        <div class="hero">
          <img src="gambar/header.jpg" height="auto" width="100%" />
        </div>
      </div>
      <!-- Akhir Header -->


      <!-- Navbar -->
      <div class="container">
        <div class="row text-center">
          <div class="row justify-conter-center">
            <div class="col-md-7 mb-5">
            </div>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-blues">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">Beranda</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Menu Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="sejarah.php">Sejarah Perusahaan</a></li>
                      <li><a class="dropdown-item" href="alur.php">Proses Produksi</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      News
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="#promosi">Promosi</a></li>
                      <li><a class="dropdown-item" href="porto.php">Porto</a></li>
                      <li><a class="dropdown-item" href="gallery.php">Galeri</a></li>
                      <li><a class="dropdown-item" href="kontak.php">Hubungi Kami</a></li>
                      <li><a class="dropdown-item" href="#berita_acara">Berita Acara</a></li>
                      <li><a class="dropdown-item" href="#berita_terbaru">Berita Terbaru</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Produk
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another Action</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Event
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="#pesan">Pemesanan</a></li>
                      <li><a class="dropdown-item" href="#jam_buka">Jam Buka</a></li>
                      <li><a class="dropdown-item" href="#">Innovation</a></li>
                      <li><a class="dropdown-item" href="#Contact">Hubungi Kami</a></li>
                    </ul>
                  </li>
                  <div class="row text-center">
                    <div class="row justify-content-center">
                    <div class="col-md-3">
                    
                    <li><li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                     Exit
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item btn-btn-primary" href="logout.php">Keluar</a></li>
                      </div>
                    </div>
                  </div>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- Akhir Navbar -->

      <!-- Caresoul -->
      <div class="container">
        <div class="row">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="gambar/praktis.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="gambar/iklan.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="gambar/bgpromo.png" class="d-block w-100" alt="...">
              </div>
            </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <!-- Caresoul -->




      <!-- Pemesanan dan Berita Acara -->

      <div class="container">
        <div class="row mt-3">

          <div class="col-ms-12 col-lg-3">
            <div class="menu-kiri">
              <div class='kotak'>
                <h5>Pemesanan</h5>
                <p>
                  Isi Form Pemesanan dengan tombol whatsapp di bawah ini
                </p>

              <div style="position:fixed;left:50px;bottom:50px;width:50px;height:50;">
              <a href="https://api.whatsapp.com/send?phone=+6289682429317&text=
              Hallo%20Mba%20Riri%20saya%20ingin%20memesan%20roti%20Primebread%0ANama%3A%0ANo.%20HP%3A%0AAlamat%3A%0AJenis%20Roti%3A%0AJumlah%3A">
                <img src="gambar/whatsapp.png"></a>
                </div>
                </select>
              </div>
            </div>
            <style>
            
            </style>
            
            <!--AKHIR PEMESANAN  -->
            <!-- pencarian -->
            <section id="berita_acara">
              <form>
                <input class="search" type="text" placeholder="Cari..." required>
                <input class="button" type="button" value="Cari">
              </form>
          </div>

          <div class="col-ms-12 col-lg-9">
          <div class="berita">
            <h3 class="acara">Berita & Acara</h3>
             <span class="tanggal-posting">
              pada hari ini 08.26 WIB, 16 Juni 2021 diposting
             </span>

             <img src="gambar/promo_man.png" width="200px" alt="Cream Roll">
           
            <p>
              Prime Bread didirikan di Bogor pada tahun 2015 dan mulai berproduksi pada tanggal 17 Oktober 2016 serta
              melakukan penjualan perdana pada tanggal 18 Oktober 2016. PRIME BREAD mengkhususkan diri untuk memproduksi
              roti berkualitas sesuai dengan slogan yang diusung yaitu Praktis, Penuh Energy dan Kebaikan

            </p>

            <p>Saat ini Prime Bread memiliki 8 (delapan) varian, yaitu 4 roti dengan bahan Terigu yaitu Roti Coklat, Vanilla, Jagung, Moca, Keju, Taro dam memiliki varian terbaru yakni Prime Duo Mentega Coklat dan Prime Duo Pisang Coklat. PRIME BREAD masih terus mengembangkan varian-varian baru lainnya. Roti PRIME BREAD telah dijual di
              gerai Indomaret di wilayah <strong>Jabotabek, Purwakarta, Cirebon</strong> serta <strong>Bandung</strong> dan Indogrosir di <strong>Karawang, Tangerang, Bogor,
              Bintara, Cipinang, Kemayoran, Ciputat</strong> serta <strong>Bandung</strong></p>
            <p>
              PT. Gardenia Makmur Selaras selaku pemiliki hak paten Prime Bread di Indonesia telah mendapatkan
              sertifikat Halal dan BPOM. Proses produksi roti Prime Bread didukung dengan teknologi canggih dan higienis 
              serta tenaga-tenaga ahli anak bangsa Indonesia.

            </p>
            <a class="tombol tombol-lengkap" href="sejarah.php">Selengkapnya</a>
             </section>
              </div>
             </div>
           </div>
        <!-- Akhir Pemesanan dan Berita Acara -->

        <!-- lINK PROMOSI -->
        <div class="container">
          <div class="row mt-2">
            <section id="promosi">
            <h4><a href="#">LINK PROMOSI TERBARU</a></h4>
            </section>
          </div>
        </div>
        <!--AKHIR LINK  -->

        <div class="container">
          <section id="jam_buka">
            <div class="row justify-content-center">
              <div class="col-12">
                <h3>Jadwal Buka</h3>
                <img src="" alt="">

                <p> Senin-Jumat 08.00 WIB - 16.00 WIB</p>
          </section>
          <!-- berita terbaru -->
          <section id="berita_terbaru">
            <h3>Berita Terbaru</h3>

            <nav class="menu-artikel">
              <ul>
                <li><a href="#Action">Menu</a></li>
                <li><a href="#">Promosi Duo Mentega</a></li>
                <li><a href="#">Promosi Cream Roll</a></li>
                <li><a href="#berita_acara">Berita & Acara</a></li>
                <li><a href="#">Register</a></li>
              </ul>
            </nav>
          </section>
        </div>
      </div>
  </div>

  <!--akhir berita  -->

  <!-- card gallery -->
  <div class="container">
  <div class="row text-right">
      <div class="col-ms-12 col-lg-11">
    <div class="card-group">
      <div class="card">
      
      
      <img src="gambar/moca.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Moka</h5>
          <p class="card-text">Cream Roll Moka</p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card">
        <img src="gambar/vanila.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vanila</h5>
          <p class="card-text">Cream Roll Vanila </p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card">
        <img src="gambar/taro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Taro</h5>
          <p class="card-text">Cream Roll Taro</p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
              <div class="row text-center">
                 <div class="col lg-3">
                    <div class="gambar_tangan">
                      <img src="gambar/kananberes3.gif">
                    </div>
                </div>
            </div>

    </div>
    <div class="card-group">
      <div class="card">
        <img src="gambar/coklat.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Coklat</h5>
          <p class="card-text">Cream Roll Coklat</p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card">
        <img src="gambar/mentega.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Prime Duo Mentega Coklat</h5>
          <p class="card-text"></p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>
      <div class="card">
        <img src="gambar/duo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Prime Duo Pisang Coklat</h5>
          <p class="card-text"></p></p>
          <p class="card-text"><small class="text-muted"></small></p>
        </div>
      </div>

      
        <div class="row text-center"> 
          <div class="col lg-3">
              <div class="gambar.gif">
              <img src="gambar/kananberes3.gif">


    </div>
      </div>
      </div>
        
                </div>
            </div>
          </div>

        </div>

  </div>
  <!-- akhir card -->

  <!-- form -->
  
    <h3>
      <center>Hubungi Kami</center>
    </h3>
    <form action="simpan.php" method="post">
    <div class="container">
    <section id="kontak">
          <form class="row g-3"> 
            <div class="col-md-6">
              <label for="inputNama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required placeholder="Nama"> 
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="primebread@mail.com"> 
            </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Sekolah</label>
                <input type="text" class="form-control" id="sekolah" name="sekolah" autocomplete="off" required placeholder="SDN Primebread Cibinong">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label" >Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" required placeholder="Jl Raya Bogor Kp Nanggewer">
              </div>
              <div class="col-md-5">
                <label for="inputCity" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" autocomplete="off" placeholder="Bogor">
              </div>
              <div class="col-md-4">
                <label for="inputState" class="form-label">Kabupaten</label>
                <select id="inputState" class="form-select" id="kabupaten" name="kabupaten">
                  <option selected>Kabupaten Bogor</option>
                  <option selected>Bogor Kota</option>
                  <option selected>Depok</option>
                  <option selected>Jakarta Barat</option>
                  <option selected>Jakarta Timur</option>
                  <option selected>Jakarta Utara</option>
                  <option selected>Jakarta Selatan</option>
                  <option selected>Jakarta Pusat</option>
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="tanggal">
                <label for="inputState" class="form-label" >Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" required>
              </div>
            
              <div id="clock" class="clock"></div>
              <script src="js/script.js"></script>


          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>      
            <div class="col-12"> 
                <button type="submit" class="btn btn-primary" id="pesan" onclick="submit()">Submit</button>
                <p id="pesan"></p>
            </div>
            <!-- <a href="cetak.php" target="blank">Cetak</a> -->
            
          
          </form>
        </div>

     </section>
    </form>
  </div>
  <!--  footer-->
  <footer>
    PT. Gardenia Makmur Selaras | 2021
  </footer>                                                                             

  </div>
  </div>

  </div>

</body>
</div>
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->

</html>