<?php
  require "functions.php";

  $id = $_GET["id"];
  $sql = "SELECT * FROM kontak WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="editDataksi.php?id=<?php echo $row["id"] ?>" method="POST" enctype="multipart/form-data">
        <h3>Edit Data</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" value="<?php echo $row["nama"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Email</label>
          <input type="text" name="email" value="<?php echo $row["email"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">No Telp</label>
          <input type="text" name="notelp" value="<?php echo $row["notelp"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Pekerjaan</label>
          <input type="text" name="pekerjaan" value="<?php echo $row["pekerjaan"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Foto</label>
          <input type="file" name="foto" value="<?php echo $row["foto"] ?>" required>
        </div>
        <input type="submit" value="Ubah Data" name="ubah">
        <a href="read.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>