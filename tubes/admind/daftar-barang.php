<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login-admind.php");
    exit;
}

// Melakukan query
require '../php/function.php';

$barang = query("SELECT * FROM barang");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>daftar-barang</title>
  </head>
    <style>
        table th {
            border: 1px solid black;
            text-align: center;
            
        }

        table td {
            border: 1px solid black;
            text-align: center;
        }

        table td a {
            width: 80px;
            margin: 5px;
        }

        @media print {
            .no-print {
                display:none !important;
            }
        }
    </style>
  <body>

<div class="daftar-barang">

<button class="btn btn-danger text-light m-5 no-print" onclick="window.print()">Print</button>

    <table>
    <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Bahan</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($barang as $brg) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td>
                            <a class="btn btn-primary me-2" href="../php/ubah.php?id=<?= $brg["id_barang"]; ?>">Ubah</a>
                            <a class="btn btn-danger" href="../php/hapus.php?id=<?= $brg["id_barang"]; ?>" onclick="return confirm('Hapus Data??')">Hapus</a>                    </td>
                        <td>  <img src="../img/<?= $brg["gambar"]; ?>" class="img-fluid rounded-start" alt="..."></td>
                        <td><?= $brg["nama_barang"]; ?></td>
                        <td><?= $brg["brand"]; ?></td>
                        <td><?= $brg["harga"]; ?></td>
                        <td><?= $brg["kategori"]; ?></td>
                        <td><?= $brg["bahan"]; ?></td>
                        <td><?= $brg["warna"]; ?></td>
                        <td><?= $brg["deskripsi"]; ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach ?>
            </tbody>
            </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
