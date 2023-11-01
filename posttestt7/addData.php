<?php
  require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="addDataaksi.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Data</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" placeholder="John Doe" required>
        </div>
        <div class="inputBox">
          <label for="">Email</label>
          <input type="text" name="email" placeholder="hakim@gmail.com" required>
        </div>
        <div class="inputBox">
          <label for="">No Telp</label>
          <input type="text" name="notelp" placeholder="10" required>
        </div>
        <div class="inputBox">
          <label for="">Pekerjaan</label>
          <input type="text" name="pekerjaan" placeholder="IT" required>
        </div>
        <div class="inputBox">
          <label for="">Masukkan Foto</label>
          <input type="file" name="foto"  required>
        </div>
        <input type="submit" value="Tambah Data" name="tambah">
        <a href="read.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>