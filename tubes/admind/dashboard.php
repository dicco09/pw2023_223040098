<?php 
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login-admind.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
  <a class="btn btn-danger ms-3 mt-3" href="logout.php">Logout</a>

  <h1 class="text-center mb-3">Dashboard admind</h1>

  <div class="dashboard d-flex">
  <a class="btn btn-primary" href="tambah-barang.php">Tambah barang</a>
  <a class="btn btn-primary ms-2" href="daftar-barang.php">Daftar barang</a>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>