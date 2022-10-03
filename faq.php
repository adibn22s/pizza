<?php
include 'koneksi.php';
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="faq.css" />
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
    <div class="container mt-3 judul-style">
        <p class="text-center text-danger fw-bold">Frequently Asked Question</p>
    </div>
    <div class="container mb-5">
        <div class="card card-style">
        <div class="card-body mt-5 ms-5">
        <p class="card-text fw-bold">1. Apa itu website Pizza Hut Indonesia?</p>
        <p class="text-style ms-4">Website Pizza Hut Indonesia adalah sebuah layanan dari pemesanan pizza berbasis digital yang dapat
    dilakukan dengan melalui desktop,handphone atau tablet masing-masing.Di dalam website ini pelanggan
    bisa menikmati menu terbaik dari kami yaitu melalui pemesanan dengan delivery yang dimana tanpa perlu
    repot pizza Anda bisa sampai di depan rumah.Anda pun tidak perlu mengantri lagi untuk memesan pilihan
    pizza yang sudah kami sediakan.</p>
        <p class="card-text fw-bold">2. Apa saja ketentuan mendaftar di website?</p>
        <p class="text-style ms-4"> Hal yang perlu dilakukan hanya dengan memiliki alamat email dan nomor telepon serta pembuatan password,
    Anda bisa langsung mendaftarkan diri ke dalam website Pizza Hut Indonesia ini.</p>
        <p class="card-text fw-bold">3. Apa saja metode pembayaran yang dapat digunakan?</p>
        <p class="text-style ms-4">  Metode pembayaran yang bisa dilakukan melalui website ini bisa dengan Online Payment dan Payment on
    Delivery.Online Payment terdiri dari Credit Card,BCA Virtual Account,Shopeepay dan GoPay.</p>
        <p class="card-text fw-bold">4. Bagaimana saya bisa mendapatkan promo Pizza Hut Indonesia?</p>
        <p class="text-style ms-4">Pizza Hut Indonesia memiliki banyak promo yang ditawarkan kepada Anda semuanya.Dimana Anda bisa
    mengakses untuk melihat kumpulan promo tersebut dengan mengklik button"Hot Promo".Maka,Anda bisa
    langsung memesan berdasarkan promo yang ingin dibeli.</p>
        <p class="card-text fw-bold">5. Apakah Pizza Hut Indonesia memiliki sertifikasi halal?</p>
        <p class="text-style ms-4"> Semua bahan yang digunakan dan disediakan pada Pizza Hut Indonesia adalah bahan yang 100%Halal dan
    sudah mendapatkan persetujuan penggunaan dari LPPOM MUI terdaftar dengan No. Sertifikasi
    00160005580799.</p>
        
    </div>
</div>
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
