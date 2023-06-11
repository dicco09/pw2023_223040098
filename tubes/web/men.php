<?php
// Melakukan query
require '../php/function.php';
$kategori = "men"; 
$barang = query("SELECT * FROM barang WHERE kategori = '$kategori'");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
      integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT"
      crossorigin="anonymous"
    />

    <title>men</title>
  </head>

  <body>
  <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand text-light" href="#">Dicco Distro</a>
  </div>
</nav>

   <!-- Card -->

   <div class="container">
    <div class="row">
    
      <?php foreach ($barang as $brg) : ?>
        <div class="col-lg-4 d-flex">
   
          <div class="barang mt-3 mb-3 p-3" >
             <div class="card" style="width: 18rem;">
             <img src="../img/<?= $brg['gambar'] ?>" class="card-img-top" alt="..."></div>
             <div class="card-body">
             <h5 class="card-title"><?= $brg['nama_barang'] ?></h5>
             <p class="card-text">Rp <?= $brg['harga'] ?></p>
             <a href="detail-barang.php?id=<?= $brg["id_barang"] ?>" class="btn btn-primary">Details</a>
             </div>
             </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
   </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    -->
  </body>
</html>
