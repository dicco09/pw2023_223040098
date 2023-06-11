<?php

// melakukan query 

require '../php/function.php';
$id = $_GET["id"];
$brg = query("SELECT * FROM barang WHERE id_barang = $id")[0];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>detail-barang</title>
  </head>
  <body>

  <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand text-light" href="#">Dicco Distro</a>
  </div>
</nav>

 <div class="d-flex justify-content-center mt-5">
    <div class="card mb-3 shadow rounded border border-secondary" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="../img/<?= $brg["gambar"]; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body rounded bg-dark text-light">
                    <h5 class="card-title"><?= $brg["nama_barang"]; ?></h5>
                    <p class="card-text text-secondary"><?= $brg["brand"]; ?></p>
                    <p class="card-text">Rp <?= $brg["harga"]; ?></p>
                    <p class="card-text"> <?= $brg["bahan"]; ?></p>
                    <p class="card-text"> <?= $brg["warna"]; ?></p>
                    <p class="card-text">Deskripsi : <br> <?= $brg["deskripsi"]; ?></p>
                </div>
            </div>
        </div>
    </div>
    </div> 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>