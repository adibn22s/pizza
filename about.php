<?php
include 'koneksi.php';
session_start();
?>

<!doctype html>
<html lang="en">
  <title>About</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="about.css" />
    <!-- Awal Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style">
    <div class="container-fluid">
      <a class="navbar-brand" href="homepage.php">
          <img src="img/logo.png" alt="" width="360" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto fs-4 me-4">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promo.php">Hot Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
                  <?php if(isset($_SESSION['masuk'])): ?>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  <?php else: ?>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>
                  <?php endif ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Checkout</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
<!-- Akhir Navbar -->

  </head>
  <body>
      <div class="container mt-3">
          <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <img src="img/about.png" alt="" width="410">
              </div>
              <div class="col-md-4"></div>
          </div>
      </div>
      <div class="container mt-3">
          <p class="text-style">Perusahaan Pizza Hut ini berdiri pada tahun 1958 di dalam kota Wichita,Amerika Serikat yang didirikan oleh dua
            bersaudara bernama Dan serta Frank Carney.Mereka berdua berinisiatif untuk mendirikan sebuah kedai Pizza
            sederhana.Namun,restoran pizza sederhana yang mereka buat ini disukai oleh banyak orang sehingga bisa menyebar ke seluruh dunia,termasuk salah satunya Indonesia.</p>
          <p class="text-style">Perusahaan Pizza Hut di Indonesia ini membuka restoran pertamanya dibuka di gedung Djakarta Theatre pada
            tahun 1984. Pada tahun tahun berikutnya,Pizza hut dapat menyebar ke seleuruh bagian Indonesia,bahkan sampai tersedia lebih dari 500 outlet dari ujung barat ke ujung timur negeri ini.</p>
          <p class="text-style"> Keren sekali bukan?Resep rahasia dari perusahaan kami ialah service dan inovasi yang kami buat untuk para pelanggan diberikan yang paling terbaik karena kami mengutamakan kepuasan pelanggan kamu.</p>
          <p class="text-style"> Dalam Pizza Hut Indonesia ini terdiri dari Pizza Hut Restaurant dan PHD dengan layanan"30 menit pasti tiba".
            Karena kami mengerti,kesibukan dan terbatasnya waktu bikin kamu ingin semuanya serba cepat,jadi pesanan kamu tetap hangat dan nikmat saat tiba di tujuan.</p>
          <p class="text-style">Jadi,Pizza Hut akan selalu memberikan pelayanan terbaik kepada kalian semua pelanggan kami.</p>
          <p class="text-style">Kalian puas kami akan senang.</p>
          <p class="text-style">Jangan lupa,Hanya di Pizza Hut tempat Pizza yang abizz nya tidak tertara!</p>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
<!-- Footer -->
<footer class="bg-danger mt-5 footer-style">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <img src="img/footer.png" alt="" height="190" width="300">
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</footer>
<!-- Akhir Footer -->
</body>
</html>
