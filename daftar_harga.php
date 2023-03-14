<?php include_once 'action.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Daftar Harga</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">Website Pemesanan Tiket Wisata</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link fw-semibold" aria-current="page" href="index.php">Beranda</a>
          <a class="nav-link fw-semibold" href="pemesanan_tiket.php">Pemesanan Tiket</a>
          <a class="nav-link fw-semibold" href="daftar_harga.php">Daftar Harga</a>
          <a class="nav-link fw-semibold" href="grafik.php">Grafik Pemesanan</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <!-- Mencetak judul dengan fungsu prosedur -->
    <?= judul("Daftar Harga") ?>
    <br>
    <div class="table-responsive">
      <!-- Membuat tabel daftar harga -->
      <table class="table">
        <thead>
          <tr>
            <td>
              Nomor
            </td>
            <td>
              Nama
            </td>
            <td>
              Harga
            </td>
          </tr>
        </thead>
        <tbody>
          <!-- Looping data -->
          <?php for ($i = 0; $i < count(get_tempat_wisata()); $i++) { ?>
          <tr>
            <td>
              <?= $i + 1 ?>
            </td>
            <td>
              <?= get_tempat_wisata()[$i]['nama'] ?>
            </td>
            <td>
              <?= get_tempat_wisata()[$i]['harga'] ?>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

</body>

</html>