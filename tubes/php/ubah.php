<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: ./web/login.php");
    exit;
}

require 'function.php';
// koneksi ke dbms
$conn = koneksi(); // Establish the database connection

// ambil data di URL
$id = $_GET["id"];

// query data barang berdasarkan id
$barang = query("SELECT * FROM barang WHERE id_barang = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // ambil data dari form
    $id = $_POST["id"];
    $nama_barang = $_POST["nama_barang"];
    $brand = $_POST["brand"];
    $harga = $_POST["harga"];
    $kategori = $_POST["kategori"];
    $bahan = $_POST["bahan"];
    $warna = $_POST["warna"];
    $deskripsi = $_POST["deskripsi"];

    // periksa apakah ada file gambar yang diunggah
    if ($_FILES["gambar"]["error"] === 4) {
        // jika tidak ada gambar yang diunggah, gunakan gambar yang sudah ada
        $gambar = $barang["gambar"];
    } else {
        // jika ada gambar yang diunggah, upload gambar baru
        $gambar = uploadImage();
        if (!$gambar) {
            // jika upload gambar gagal, tampilkan pesan error
            echo "
                <script>
                    alert('Upload gambar gagal!');
                    document.location.href = 'ubah.php?id=$id';
                </script>
            ";
            exit;
        }
    }

    // query update data barang
    $query = "UPDATE barang SET
                nama_barang = '$nama_barang',
                brand = '$brand',
                harga = '$harga',
                kategori = '$kategori',
                gambar = '$gambar',
                bahan = '$bahan',
                warna = '$warna',
                deskripsi = '$deskripsi'
              WHERE id_barang = $id";

    // cek apakah data berhasil diubah atau tidak
    if (mysqli_query($conn, $query)) {
        echo "
           <script> 
            alert('Data berhasil diubah!');
            document.location.href = '../admind/daftar-barang.php';
           </script>
        ";
    } else {
        echo "
           <script>
            alert('Data gagal diubah!');
            document.location.href = 'ubah.php?id=$id';
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
    <title>Form Ubah</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <style>
        .form {
            border-radius: 15px !important;
            background-color: Gainsboro;
            width: 75% !important;
            box-shadow: 0 0 6px black !important;
        }

        label {
            font-weight: 600 !important;
        }

        @media screen and (max-width:900px) {
            .form {
                width: 100% !important;
                padding: 20px !important;
            }

            .img-preview {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <header class="bg-primary p-3">
        <h1 class="text-center text-light">FORM UBAH DATA</h1>
    </header>

    <div class="container mt-5 mb-3">
        <form class="form p-5 m-auto" action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $barang['id_barang']; ?>" />
            <img class="img-preview w-25" src="../img/<?= $barang["gambar"]; ?>" alt="Preview" id="preview" class="preview-image" />
            <div class="mb-3 mt-4">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" onchange="previewImage(event)" class="form-control" id="gambar" name="gambar" />
            </div>

            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang']; ?>" required />
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" value="<?= $barang['brand']; ?>" required />
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>" required />
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $barang['kategori']; ?>" required />
            </div>

            <div class="mb-3">
                <label for="bahan" class="form-label">Bahan</label>
                <input type="text" class="form-control" id="bahan" name="bahan" value="<?= $barang['bahan']; ?>" required />
            </div>

            <div class="mb-3">
                <label for="warna" class="form-label">Warna</label>
                <input type="text" class="form-control" id="warna" name="warna" value="<?= $barang['warna']; ?>" required />
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $barang['deskripsi']; ?>" required />
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-3 mb-2"><i class="fa-solid fa-floppy-disk me-2"></i>Simpan</button>
        </form>
    </div>

    <!-- Name brand -->
    <div class="name-brand-bottom text-center mb-5">
        <p>
            <span>Developed by : </span>
            <i class="fa-solid fa-user-doctor text-primary me-1"></i>Halodek
        </p>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block'; // Tampilkan gambar pratinjau
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function changeKategori() {
            var select = document.getElementById("kategoriSelect");
            var input = document.getElementById("kategoriInput");
            var selectedValue = select.value;
            input.value = selectedValue;
        }
    </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font awesome script -->
    <script src="https://kit.fontawesome.com/59f11d8874.js" crossorigin="anonymous"></script>
</body>

</html>
