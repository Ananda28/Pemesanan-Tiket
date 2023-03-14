<?php include_once 'action.php';?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pemesanan Tiket Wisata</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="ticket.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

<div class="row mt-4">
  <!-- Looping data -->
  <!-- menampilkan gambar dan video -->
  <?php for ($i = 0; $i < count(get_tempat_wisata()); $i++) { ?>
    <div class="col-lg-4">
        <div class="card text-center">
            <div class="card-body p-0">
                <img width="500px" height="250px" src=" <?= URL ?>/images/<?= get_tempat_wisata()[$i]['foto'] ?>"
                    alt="">
                <iframe width="500px" height="250px" src="<?= get_tempat_wisata()[$i]['video'] ?>"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="card-footer text-center">
                <b>
                    <?= get_tempat_wisata()[$i]['nama'] ?>
                </b>
            </div>
        </div>
    </div>
  <?php } ?>
</div>
</html>
