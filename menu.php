<?php

include 'koneksi.php';
include 'session.php';


?>

<!doctype html>
<html lang="en">
<title>Menu</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="menu.css" />
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

<!-- Kategori -->
<section class="konten">
    <div class="container" > 
        <div class="row justify-content-center">
        <div class="col-md-2 mt-3">
            <div class="card card-style" >
                <img src="img/menu/160.png" class="card-img-center ms-2 me-2 mt-4 mb-4 " alt="...">
                 <div class="card-body"></h5>
                        <h5 class="text-style card-title text-center">Pizza
                    </div>
            </div> 
          </div>  
          <div class="col-md-2 mt-3">
            <div class="card card-style" >
                <img src="img/menu/142.png" class="card-img-center mt-2 mb-1" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pasta</h5>
                    </div>
            </div> 
          </div>  
          <div class="col-md-2 mt-3">
            <div class="card card-style" >
                <img src="img/menu/170.png" class="card-img-center mt-s mb-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Appetizer</h5>
                    </div>
            </div> 
          </div>  
          <div class="col-md-2 mt-3">
            <div class="card card-style" >
                <img src="img/menu/180.png" class="card-img-center mt-s mb-2" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Nasi</h5>
                    </div>
            </div> 
          </div>  
          <div class="col-md-2 mt-3">
            <div class="card card-style" >
                <img src="img/menu/190.png" class="card-img-center mt-2 mb-1" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Minuman</h5>
                    </div>
            </div> 
          </div>    
        </div>
    </div>
</section>

<!-- Akhir Kategori -->

<hr size="10px">

<!-- Menu -->
<section class="menu menu-style">
  <div class="container ">
    <img src="img/menu/160.png" width="100" alt="">
    <span class="span ms-3">PIZZA</span>
    <hr size="5px">
    <div class="container">
      <div class="row">
          <?php
            $sql = mysqli_query($conn,"SELECT * FROM produk WHERE kategori='Pizza '");
            while($produk = mysqli_fetch_assoc($sql)){
          ?>
        <div class="col-md-3 ">
          <div class="thumbnail">
            <img src="foto/<?php echo $produk['foto_produk'];?>" width="100" alt="" class="mt-3">
            <div class="caption mt-3">
              <h5 class="fw-bold"><?php echo $produk['nama_produk'];?></h5>
              <div><a href="detailmenu.php?id=<?php echo $produk['id_produk'];?> " class="harga btn btn-info mt-1">Detail</a></div>
              <div><a href="beli.php?id=<?php echo $produk['id_produk'];?> " class="harga btn btn-success mt-1">Rp.<?php echo number_format($harga=$produk['harga_produk']);?></a></div>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<section class="menu menu-style mt-5 mb-4 ">
  <div class="container ">
    <img src="img/menu/142.png" width="100" alt="">
    <span class="span ms-3">PASTA</span>
    <hr size="5px">
    <div class="container">
      <div class="row">
          <?php
            $sql = mysqli_query($conn,"SELECT * FROM produk WHERE kategori='Pasta '");
            while($produk = mysqli_fetch_assoc($sql)){
          ?>
        <div class="col-md-3 ">
          <div class="thumbnail">
            <img src="foto/<?php echo $produk['foto_produk'];?>" width="100" alt="">
            <div class="caption mt-3">
              <h5 class="fw-bold"><?php echo $produk['nama_produk'];?></h5>
              <div><a href="detailmenu.php?id=<?php echo $produk['id_produk'];?> " class="harga btn btn-info mt-1">Detail</a></div>
              <div><a href="beli.php?id=<?php echo $produk['id_produk'];?>" class="harga btn btn-success mt-1">Rp.<?php echo number_format($produk['harga_produk']);?></a></div>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<section class="menu menu-style mt-5 mb-4">
  <div class="container ">
    <img src="img/menu/170.png" width="100" alt="">
    <span class="span ms-3">APPETIZER</span>
    <hr size="5px">
    <div class="container">
      <div class="row">
          <?php
            $sql = mysqli_query($conn,"SELECT * FROM produk WHERE kategori='Appetizer'");
            while($produk = mysqli_fetch_assoc($sql)){
          ?>
        <div class="col-md-3 ">
          <div class="thumbnail">
            <img src="foto/<?php echo $produk['foto_produk'];?>" width="100" alt="">
            <div class="caption mt-3">
              <h5 class="fw-bold"><?php echo $produk['nama_produk'];?></h5>
              <div><a href="detailmenu.php?id=<?php echo $produk['id_produk'];?> " class="harga btn btn-info mt-1">Detail</a></div>
              <div><a href="beli.php?id=<?php echo $produk['id_produk'];?>" class="harga btn btn-success  mt-1">Rp.<?php echo number_format($produk['harga_produk']);?></a></div>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<section class="menu menu-style mt-5 mb-4">
  <div class="container ">
    <img src="img/menu/180.png" width="100" alt="">
    <span class="span ms-3">NASI</span>
    <hr size="5px">
    <div class="container">
      <div class="row">
          <?php
            $sql = mysqli_query($conn,"SELECT * FROM produk WHERE kategori='Nasi'");
            while($produk = mysqli_fetch_assoc($sql)){
          ?>
        <div class="col-md-3 ">
          <div class="thumbnail">
            <img src="foto/<?php echo $produk['foto_produk'];?>" width="100" alt="">
            <div class="caption mt-3">
              <h5 class="fw-bold"><?php echo $produk['nama_produk'];?></h5>
              <div><a href="detailmenu.php?id=<?php echo $produk['id_produk'];?> " class="harga btn btn-info mt-1">Detail</a></div>
              <div><a href="beli.php?id=<?php echo $produk['id_produk'];?>" class="harga btn btn-success mt-1">Rp.<?php echo number_format($produk['harga_produk']);?></a></div>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<section class="menu menu-style mt-5 mb-4">
  <div class="container ">
    <img src="img/menu/190.png" width="100" alt="">
    <span class="span ms-3">MINUMAN</span>
    <hr size="5px">
    <div class="container">
      <div class="row">
          <?php
            $sql = mysqli_query($conn,"SELECT * FROM produk WHERE kategori='Minuman'");
            while($produk = mysqli_fetch_assoc($sql)){
          ?>
        <div class="col-md-3 ">
          <div class="thumbnail">
            <img src="foto/<?php echo $produk['foto_produk'];?>" width="100" alt="">
            <div class="caption mt-3">
              <h5 class="fw-bold"><?php echo $produk['nama_produk'];?></h5>
              <div><a href="detailmenu.php?id=<?php echo $produk['id_produk'];?> " class="harga btn btn-info mt-1">Detail</a></div>
              <div><a href="beli.php?id=<?php echo $produk['id_produk'];?>" class="harga btn btn-success mt-1">Rp.<?php echo number_format($produk['harga_produk']);?></a></div>
              </div>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>

<!-- Akhir Menu -->

<?php
include 'footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>