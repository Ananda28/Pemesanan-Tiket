<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pemesanan Wisata</title>
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
        <a class="nav-link fw-semibold" href="pemesanan_wisata.php">Pemesanan Tiket</a>
        <a class="nav-link fw-semibold" href="daftar_harga.php">Daftar Harga</a>
        <a class="nav-link fw-semibold" href="grafik.php">Grafik Pemesanan</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h2 style="margin-top:20px">Form Pemesanan</h2>
        <form action="action.php" method="post" name="pemesanan">
          <table style="margin-top:20px">
            <tr style="margin-top:20px">
              <td class="" style="width:250px ">Nama Lengkap</td>
              <td><input type="text" style="width:300px" class="form-control mt-2" name="nama" /></td>
            </tr>
            <tr class="mt-4">
              <td class="mt-4">Nomor Identitas</td>
              <td><input type="text"class="form-control mt-2" minlength="16" maxlength="16" id="no_id" name="no_id" />
            </td>
            </tr>
            <tr>
              <td class="mt-2">No. Hp</td>
              <td><input type="text" class="form-control mt-2" name="hp" /></td>
            </tr>
            <tr>
              <td>Tempat Wisata</td>
              <td>
                <select name="tempat" class="form-select mt-2" id="tempat">
                  <option value="pantai">Pantai Carita</option>
                  <option value="museum">Museum Abdoel Basuki</option>
                  <option value="taman nasional">Taman Nasional Ciremai</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Tanggal Kunjungan</td>
              <td><input type="date" class="form-control mt-2" name="tanggal" /></td>
            </tr>
            <tr>
              <td>Pengunjung Dewasa</td>
              <td><input type="number" class="form-control mt-2" min="0" id="pengunjung_dewasa" name="pengunjung_dewasa" /></td>
            </tr>
            <tr>
              <td>Pengunjung Anak</td>
              <td><input type="number" class="form-control mt-2" min="0" id="pengunjung_anak" name="pengunjung_anak" /></td>
            </tr>
            <tr>
              <td>Harga Tiket</td>
              <td>
                <span id="total"></span>
                <input type="hidden" name="total" />
              </td>
            </tr>
            <tr>
              <td>Total Bayar</td>
              <td><span id="harga"></span>
                <input type="hidden" name="harga" />
              </td>
            </tr>
          </table>
          <tr>
            <input type="checkbox" class="mt-3" id="agree" name="agree" require>
            <td>Saya dan/atau rombongan telah membaca, memahami dan setuju berdasarkan syarat dan ketentuan yang telah
              ditetapkan</td>
          </tr>
        </form>
        <div class="button-tiket mt-4 ms-5">
          <button class="btn btn-success" onclick="hitung()" id="hitung">Hitung Total Bayar</button>
          <button class="btn btn-primary" style="width:150px" id="pesan" onclick="onSubmit(event)">Pesan Tiket</button>
          <button class="btn btn-danger" style="width:100px" id="cancel" onclick="cancel()">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  
</html>