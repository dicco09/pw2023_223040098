<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: web/login.php");
    exit;
}

require 'php/function.php';


// search
if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $barang = query("SELECT * FROM barang WHERE
                nama_barang LIKE '%$keyword%' OR
              kategori LIkE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              brand LIKE  '%$keyword%' OR
              warna LIKE  '%$keyword%' ");
} else {
  $barang = query("SELECT * FROM barang");
}

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/bootstrap-icons.min.css" rel="stylesheet">


    <title>dicco-distro</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dicco Distro</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="web/men.php">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="web/ladies.php">Ladies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="web/kids.php">Kids</a>
            </li>
          </ul>
          <form class="d-flex" method="get" role="search">
            <input
            name="keyword" id="keyword"
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
              autofocus autocomplete="off"
            />
            <button class="btn btn-outline-success" id="search-button" name="cari" type="submit">
              Search
            </button>
          </form>
          <a href="web/logout.php" class="btn btn-danger">
              Logout
</a>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
  
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/promosi1.jpg.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/promosi2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/promosi3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      

    <!-- Card -->
    <div id="search-container">
    <div class="barang mt-3 mb-3 p-3">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
    <?php foreach ($barang as $brg) : ?>
      <div class="col mb-4">
        <a href="web/detail-barang.php?id=<?= $brg["id_barang"] ?>" class="text-decoration-none">
          <div class="card shadow rounded border border-dark">
            <img src="img/<?= $brg['gambar'] ?>" class="card-img-top" alt="...">
            <div class="card-body bg-dark text-light">
              <h5 class="card-title text-light"><?= $brg['nama_barang'] ?></h5>
              <p class="card-text text-light">Rp <?= $brg['harga'] ?></p>
              <a href="web/detail-barang.php?id=<?= $brg["id_barang"] ?>" class="btn btn-dark btn-outline-light mt-3">Details</a>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<footer class="footer bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Dicco Distro</h5>
        <p>Website ini berisi tentang Fahion dan segala jenis pakaian baik pria anak-anak maupun wanita, jika anda minat silahkan di order.</p>
      </div>
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <p>Jl. Dr. Setiabudhi No 24E, Bandung City</p>
        <p>info : meutuahdiccolinge@gmail.com</p>
        <p>082211092793</p>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <hr>
    <p class="text-center mb-0">&copy; 2023 Dicco Distro. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const keyword = document.getElementById("keyword");
    const searchContainer = document.getElementById("search-container");

    keyword.onkeyup = function () {
      fetch("ajax/search.php?keyword=" + keyword.value)
        .then((response) => response.text())
        .then((text) => (searchContainer.innerHTML = text));
    };
  });
</script>
    <script>
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
