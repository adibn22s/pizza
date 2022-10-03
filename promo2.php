<!doctype html>
<html lang="en">
<title>Promo</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="promo1.css" />

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
              <a class="nav-link" href="#">Hot Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
            <div class="dropdown mt-1">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg>
            </button>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenu2">
                  <?php if(isset($_SESSION['masuk'])): ?>
                    <li class="nav-item">
                      <a class="nav-link " href="riwayat.php">Riwayat Transaksi</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                  <?php else: ?>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>
                  <?php endif ?>
                </ul>
            </div>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Checkout</a>
            </li>
          </ul>
        </div>
      </div>
</nav>
<!-- Akhir Navbar -->
<!-- Penjelasan Promo -->
<div class="container text-center promo-style fw-bold">
<img src="img/20.png" class="img-fluid mt-4" width="650" alt="...">
<p class="text-md-start mt-4">Nikmati promo gajian bulanan Pizza Hut terbaru dengan membeli 1 akan dapat gratis 1 pizza selama periode berlangsung. Syaratnya mudah hanya melakukan pemesanan melalui website ini saja.</p>
<p class="text-md-start mt-5">Untuk informasi lebih lengkap terkait promo,simak syarat dan ketentuannya berikut ini,yaitu:</p>
    <div class="row">
        <div class="col-md-10 offset-md-2">
            <p class="text-md-start mt-3 lh-1">1. Promo membeli 1 gratis 1 berlaku untuk menu pilihan</p>
            <p class="text-md-start lh-1">2. Tanpa minimal transaksi pembelian dan bebas bayar pakai apa saja.</p>
            <p class="text-md-start lh-1">3. Berlaku untuk take away dan delivery via website Pizza Hut.</p>
            <p class="text-md-start lh-1">4. Berlaku di semua outlet Pizza Hut Indonesia.</p>
            <p class="text-md-start lh-1">5. Tidak dapat digabung dengan promo Pizza Hut lainnya.(*)</p>
        </div> 
        <a href="beli.php?id=58" ><button type="submit" name="selengkapnya" class="btn btn-light border border-dark btn-promo-style btn-group-sm fw-bold ms-5 mt-3" >Pesan</button></a>
    </div>
</div>    
<!-- Akhir Penjelasan Promo -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>