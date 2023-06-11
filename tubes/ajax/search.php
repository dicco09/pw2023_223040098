<?php
require '../php/function.php';
$keyword = $_GET['keyword'];
$barang = query("SELECT * FROM barang WHERE
                nama_barang LIKE '%$keyword%' OR
              kategori LIkE '%$keyword%' OR
              harga LIKE '%$keyword%' OR
              brand LIKE  '%$keyword%' OR
              warna LIKE  '%$keyword%' ");
?>

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