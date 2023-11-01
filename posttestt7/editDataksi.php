<?php
  require "functions.php";

  if (isset($_POST["ubah"])) {

    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $notelp = $_POST["notelp"];
    $pekerjaan = $_POST["pekerjaan"];
    $gambar = $_FILES["foto"]["name"];
    $gambarBaru = "$nama.png";
    $tmp = $_FILES["foto"]["tmp_name"];

    $tanggal_hari_ini = date("Y-m-d");

    $info = pathinfo($gambar); 
    $ekstensi = $info['extension']; 
    $gambarBaru = $tanggal_hari_ini . $nama . '.' . $ekstensi;

    if (move_uploaded_file($tmp, 'gambar/' . $gambarBaru)){
      $sql = "UPDATE kontak SET nama = '$nama', email = '$email', notelp = '$notelp', pekerjaan = '$pekerjaan', foto = '$gambarBaru' WHERE id = '$id' ";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
            <script>
              alert('Data berhasil diubah');
              document.location.href = 'read.php';
            </script>
          ";
      } else {
        echo "
          <script>
            alert('Data gagal diubah');
            document.location.href = 'read.php';
          </script>
          ";
      }
    }
  }
?>