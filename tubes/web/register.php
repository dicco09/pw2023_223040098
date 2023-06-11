<?php

require '../php/function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Berhasil ditambahkan');
            window.location = 'login.php';
          </script>";
    } else {
        echo mysqli_error($conn);
    }
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

    <title>Register</title>
  </head>

  <body>
<form action="" method="post">
    <div class="card-login mt-5 w-75 m-auto">

    <div class="mb-3">
        <label for="nama_lengkap" class="form-label"
          >Nama lengkap</label
        >
        <input
        name="nama_lengkap"
          type="text"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Masukkan Username "
        />
      </div>
      
    <div class="mb-3">
        <label for="username" class="form-label"
          >Username</label
        >
        <input
        name="username"
          type="text"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Masukkan Username "
        />
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input
        name="password"
          type="password"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Masukkan Password"
        />
      </div>

      <div class="mb-3">
        <label for="password2" class="form-label">Password verifikasi</label>
        <input
        name="password2"
          type="text"
          class="form-control"
          id="exampleFormControlInput1"
          placeholder="Masukkan Password"
        />
      </div>

      <button type="submit" name="register" class="btn btn-dark">Daftar</button>

      <p class="text-center">
        Sudah Memiliki Akun ?
        <a class="text-decoration-none" href="login.php"> Login</a>
      </p>
    </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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
