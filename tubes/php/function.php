<?php
// define('BASEURL', 'http://localhost/pw2023_tubes_223040013/');

// koneksi database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "", "tubes_223040098");

    return $conn;
}

// ARRAY QUERY
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// REGISTRASI
function registrasi($data)
{
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $nama_lengkap = mysqli_real_escape_string($conn, $data["nama_lengkap"]);

    // cek username sudah ada atau belum 
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username sudah terdaftar');
              </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
              </script>";
        return false;
    }

    // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES (null, '$nama_lengkap', '$username', '$password')");
    return mysqli_affected_rows($conn);
}

// TAMBAH DATA 
function tambah($data)
{
    $conn = koneksi();
    // ambil data dari tiap elemen dalam form
    $nama_barang = htmlspecialchars($data['nama_barang']);
    $brand = htmlspecialchars($data['brand']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);
    $gambar = htmlspecialchars($data['gambar']);
    $bahan = htmlspecialchars($data['bahan']);
    $warna = htmlspecialchars($data['warna']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    // UP GAMBAR
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // INSERT DATA 
    $query = "INSERT INTO barang (nama_barang, brand, harga, kategori, gambar, bahan, warna, deskripsi)
    VALUES ('$nama_barang', '$brand', '$harga', '$kategori', '$gambar', '$bahan', '$warna', '$deskripsi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
    alert('Pilih gambar terlebih dahulu');
    </script>";
        return false;
    }

    // CEK VALIDASI GAMBAR
    $ekstensigambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $ekstensigambarValid)) {
        echo "<script>
        alert('Yang Anda upload bukan gambar');
        </script>";
        return false;
    }

    // CEK SIZE GAMBAR 
    if ($ukuranfile > 1000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    // LOLOS CEK, SIAP UPLOAD
    // GENERATE NEW NAME
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    move_uploaded_file($tmpName, '../img/' . $namafilebaru);

    return $namafilebaru;
}

// DELETE
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $id");

    return mysqli_affected_rows($conn);
}

function uploadImage()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        return false;
    }

    // generate nama gambar baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // pindahkan file gambar ke folder uploads
    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}

?>

