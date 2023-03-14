<?php include_once 'action.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
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
    <div class="container">
    <div class="row justify-content-center">
        <div style="width: 45%">
            <canvas id="myChart"></canvas>
        </div>
    </div>
    <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Pengunjung Anak','Pengunjung Dewasa'],
            datasets: [{
                label: 'Grafik Pemesanan',
                data: [
                        <?= get_pengunjung_anak() ?>,
                        <?= get_pengunjung_dewasa() ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

</body>
</html>