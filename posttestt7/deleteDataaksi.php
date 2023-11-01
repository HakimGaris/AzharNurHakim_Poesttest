<?php
  require "functions.php";

  $id = $_GET['id'];
  $sql = "DELETE FROM kontak WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);

  if ($result) {
    echo "
        <script>
          alert('Data berhasil dihapus');
          document.location.href = 'read.php';
        </script>
      ";
  } else {
    echo "
        <script>
          alert('Data gagal dihapus');
          document.location.href = 'read.php';
        </script>
      ";
  }
?>