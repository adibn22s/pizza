<!doctype html>
<html lang="en">
<title>Voucher</title>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="voucher.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <body>
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

<!-- Awal voucher -->
<div class="container mt-4 mb-5">
  <div class="row align-items-center">
    <div class="col"></div>
    <div class="col">
        <img src="img/444.png" alt="" width="400">
    </div>
    <div class="col"></div>
  </div>
  <div class="row">
      <div class="col-md-12 tulisan">
      <p class="text-center mt-4">Dapatkan vourcer yang tertera diatas ini untuk diberikan saat ingin melakukan pemesanan dine in di restoran Pizza Hut Indonesia di daerah JABODETABEK.</p>
      <p class="text-center mt-4">Dengan jumlah pembelian tertentu,Gift Voucher Pizza Hut dapat dicetak dengan menampilkan pesan/logo/foto khusus sesuai pesanan Anda.</p>
      <p class="text-center mt-4">Dapatkan diskon atau free voucher dalam pembelian jumlah tertentu.</p>
      <p class="text-center mt-4">Bila ingin memesan,hubungi Suparna atau Ali Sadikin di nomor(021)8306789 ext.752/234/233,atau email ke suparna@pizzahut.co.id Pembayaran dengan transfer dapat dilakukan ke PT Sarimelati Kencana,BCA cabang Bidakara,nomor rekening 450.30.7519.1</p>
      </div>
  </div>
</div>
<!-- Akhir voucher -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>