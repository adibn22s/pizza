<?php
include 'koneksi.php';
session_start();
$id_beli=$_GET['id'];

$sql = mysqli_query($conn,"SELECT * FROM pembayaran LEFT JOIN pembelian ON pembayaran.id_pembelian = pembelian.id_pembelian 
WHERE pembelian.id_pembelian ='$id_beli'");
$data = mysqli_fetch_assoc($sql);
    
// Jika belum ada pembayaran
if(empty($data))
{
    echo "<script>alert('Belum ada pembayaran');</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}

// proteksi
if($_SESSION["id_user"] !== $data["id_user"])
{
    echo "<script>alert('Error');</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}
?>

<!doctype html>
<html lang="en">
<title>Lihat Pembayaran</title>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Awal Navbar -->
<?php 
include 'navbar.php';
?>
<!-- Akhir Navbar -->
    <h2 class="text-center">Data Pembayaran</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <table class="table table-bordered border-dark fw-bold">
                    <tr>
                        <th>Nama</th>
                        <td><?php echo $data["nama"];?></td>
                    </tr>
                    <tr>
                        <th>Bank</th>
                        <td><?php echo $data["bank"];?></td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td>Rp. <?php echo number_format($data["jumlah"]);?></td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><?php echo $data["tanggal"];?></td>
                    </tr>
                    
                </table>
            </div>
            <div class="col-md-6 ">
                <img src="bukti_bayar/<?php echo $data["bukti"];?>" alt="" class="img-responsive mt-3" height="180" width="620">
            </div>
            
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>