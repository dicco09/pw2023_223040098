<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("location: login-admind.php");
    exit;
}

require '../php/function.php';
$conn = koneksi();

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script> 
            alert('Data berhasil ditambahkan!');
                document.location.href = 'tambah-barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'tambah-barang.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>tambah-barang</title>
</head>

<body>

    <h1 class="text-center mt-1 text-decoration-underline">
        FORM TAMBAH BARANG
    </h1>

    <form action="" method="post" enctype="multipart/form-data" class="d-flex flex-column mb-5 w-50 m-auto">
        <div class="mb-3 data-input">
            <label for="nama_barang" class="form-label">Nama barang </label>
            <input name="nama_barang" type="text" class="form-control" id="nama_barang" aria-describedby="emailHelp" />
        </div>
        <!--  -->
        <div class="mb-3 data-input">
            <label for="brand" class="form-label">Brand</label>
            <input name="brand" type="text" class="form-control" id="brand" aria-describedby="emailHelp" />
        </div>
        <!--  -->
        <div class="mb-3 data-input">
            <label for="gambar" class="form-label">Foto Barang</label>
            <input name="gambar" type="file" class="form-control" aria-describedby="emailHelp" />
        </div>
        <!--  -->
        <div class="mb-3 data-input">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-select form-control" aria-label="Default select example">
                <option selected>Pilih jenis kategori</option>
                <option value="men">Men</option>
                <option value="ladies">Ladies</option>
                <option value="kids">Kids</option>
            </select>
        </div>
        <!--  -->
        <div class="mb-3 data-input">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" />
        </div>
        <!--  -->
        <div class="mb-3 data-input">
            <label for="harga" class="form-label">Harga</label>
            <input name="harga" type="text" class="form-control" id="harga" aria-describedby="emailHelp" />
        </div>
        <!--  -->
        <div class="mb-3 data-input">
            <label for="bahan" class="form-label">Bahan</label>
            <input name="bahan" type="text" class="form-control" id="bahan" aria-describedby="emailHelp" />
        </div>
        <!--  -->
        <div class="mb-3 data-input">
            <label for="warna" class="form-label">Warna</label>
            <input name="warna" type="text" class="form-control" id="warna" aria-describedby="emailHelp" />
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
    </form>



    <script></script>
    <!-- Boostrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>