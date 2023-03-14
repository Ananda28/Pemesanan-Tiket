<?php include_once 'action.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Konfirmasi Pesanan</title>
</head>

<body>
  <div class="container">
    <!-- Mencetak judul dengan fungsi prosedur -->
    <?= judul("Konfirmasi Pemesanan") ?>
    <br>

    <table class="w-100">
      <tr>
        <td>
          Nama Lengkap
        </td>
        <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['nama_lengkap'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Nomor Identitas
        </td>
        <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['nomor_identitas'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Nomor HP
        </td>
        <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['nomor_hp'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Tempat Wisata
        </td>
        <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['tempat_wisata'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Tanggal Kunjungan
        </td>
        <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['tanggal_kunjungan'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Pengunjung Dewasa
        </td> 
          <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['pengunjung_dewasa'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Pengunjung Anak
        </td>
        <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['pengunjung_anak'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Total Bayar
        </td>
        <td style="width: 10px" class="text-center">:</td>
        <td>
          <?= $data['total_bayar'] ?>
        </td>
      </tr>
    </table>
    <br>
    <a href="<?= URL ?>/index.php" type="button" class="btn btn-primary">
      Selesai
    </a>
  </div>
</body>

</html>