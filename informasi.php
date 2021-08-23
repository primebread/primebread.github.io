<?php
session_start();

if (!isset($_SESSION["login"]) ){
  header("Location: login.php");
  exit;
  }

$conn = mysqli_connect("localhost", "root", "", "primebread");


?>

<html lang="en">
<head>
    
    <link rel="stylesheet" href="style.css">
    <title>Informasi  </title>
</head>
<link rel="stylesheet" href="boostrap/css/boostrap.min.css">

<link rel="stylesheet" href="boostrap/css/style.css">
<body>
    <div class="background">
        <body background="gambar/wood_pattern.png">
    
        <!-- header -->
        <div class="container">
            <div class="header">
                <img src="gambar/header.jpg" height="auto" width="100%" />
            </div>
        </div>

        <!-- navbar -->
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <ul><H3>
                        <a class="navbar-brand" href="#">Home</a>
                        <a class="navbar" href="#">Menu Produk</a>
                        <a class="navbar" href="#">Informasi</a>
                        </H3></ul>
                    </div>
                </nav>
            </div>
                     </div>
         <!-- akhir navbar -->
             <div class="container">
                        <div class="row">
                            <div class="col-md -4 col-lg -8">
                                    <div class="card">
                              <img class="card-img-top" src="gambar/coklat.jpg" width="200px" alt="card-img-tap">
                         <div class ="card-body">
                     <p class="card-text">promosi creamroll dengan beli <bold>2 GRATIS 1</bold></p>
                     </div>
                     </div>
                     </div>
                    </div>
   
    
            <div class="row">
            <div class="col-md">
                <div class="card">
                    <img class="card-img-top" src="gambar/coklat.jpg" width="200px" alt="card-img-tap">
                    <div class ="card-body">
                        <p class="card-text">promosi creamroll dengan beli <bold>2 GRATIS 1</bold></p>
                    </div>
                </div>
            </div>
                  </div>


                                
                 <div class="row">
                     <div class="col-md">
                          <div class="card">
                     <img class="card-img-top" src="gambar/coklat.jpg" width="200px" alt="card-img-tap">
                     <div class ="card-body">
                         <p class="card-text">promosi creamroll dengan beli <bold>2 GRATIS 1</bold></p>
                     </div>
                  </div>
                  </div>
                 </div>
        </div>
    <div class="container">
        <div class="col-md">
            <div class="card-img-top" src="gambar/moca.jpg" width="200px" alt="card-img-tap">
                <div class="card-body">
                    <p class ="card-text">Promosi creamroll dengan <bold> BELI 2 GRATIS 1 </bold></p>

                 </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </body>

    </div>
    
</body>
</html>