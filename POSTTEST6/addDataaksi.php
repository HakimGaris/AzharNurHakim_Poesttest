<?php
  require "functions.php";

  if (isset($_POST["tambah"])) {

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $notelp = $_POST["notelp"];
    $pekerjaan = $_POST["pekerjaan"];
    $gambar = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];

    $tanggal_hari_ini = date("Y-m-d");

    $info = pathinfo($gambar); 
    $ekstensi = $info['extension']; 
    $gambarBaru = $tanggal_hari_ini . $nama . '.' . $ekstensi;


    if (move_uploaded_file($tmp, 'gambar/'.$gambarBaru)){
      $sql = "INSERT INTO kontak VALUES(NULL, '$nama', '$email', '$notelp', '$pekerjaan', '$gambarBaru' )";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
          <script>
            alert('Data berhasil ditambah');
            document.location.href = 'read.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Data gagal ditambah');
            document.location.href = 'read.php';
          </script>
        ";
      }
    }
  }
?>