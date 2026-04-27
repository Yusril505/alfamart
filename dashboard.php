
<?php
session_start();
if (!isset($_SESSION['is_login'])) {
    header("location: main.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfamart Online - belanja lebih Mudah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<body></head>
<body>
    <style>
            .banner-utama {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1534723452862-4c874018d66d?q=80&w=2070');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }
        .card-product:hover {
            transform: translateY(-5px);
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
     <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger" href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/86/Alfamart_logo.svg" alt="Logo" width="120" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Promo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Kategori</a></li>

                    <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Logout</a></li>


                </ul>
            </div>
        </div>
    </nav>

    <!--jumbotron-->
    <header class="banner-utama text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Welcome, <?= $_SESSION['username'];?></h1>
            <p class="lead">Dapatkan promo menarik setiap harinya hanya di Alfamart Online.</p>
            <a href="#produk" class="btn btn-warning btn-lg fw-bold">Belanja Sekarang</a>
        </div>
    </header>

     <!--Card-->
     <section id="produk" class="container my-5">
        <h2 class="text-center mb-4">Produk Unggulan</h2>
        <div class="row g-4">
            
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 card-product">
                    <img src="images.jfif"class="card-img-top" alt="Produk">
                    <div class="card-body">
                        <h6 class="card-title text-truncate">Beras Premium 5kg</h6>
                        <p class="text-danger fw-bold mb-1">Rp 60.000</p>
                        <small class="text-muted"><del>Rp 69.000</del></small>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <button class="btn btn-outline-danger btn-sm w-100">+ Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 card-product">
                    <img src="1_A09350001879_20211001113946725_base.jpg"class="card-img-top" alt="Produk">
                    <div class="card-body">
                        <h6 class="card-title text-truncate">Minyak Goreng 2L</h6>
                        <p class="text-danger fw-bold mb-1">Rp 34.500</p>
                        <small class="text-muted"><del>Rp 38.000</del></small>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <button class="btn btn-outline-danger btn-sm w-100">+ Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 card-product">
                    <img src="79e9ff8d-ad8e-44f2-a25b-27b7a3750b41.jpg~tplv-aphluv4xwc-resize-jpeg_700_0.jpg"class="card-img-top" alt="Produk">
                    <div class="card-body">
                        <h6 class="card-title text-truncate">Susu UHT Full Cream 1L</h6>
                        <p class="text-danger fw-bold mb-1">Rp 20.000</p>
                        <small class="text-muted"><del>Rp 18.500</del></small>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <button class="btn btn-outline-danger btn-sm w-100">+ Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 card-product">
                    <img src="images (1).jfif"class="card-img-top" alt="Produk">
                    <div class="card-body">
                        <h6 class="card-title text-truncate">Mie Instan Goreng </h6>
                        <p class="text-danger fw-bold mb-1">Rp 18.000</p>
                        <small class="text-muted"><del>Rp 15.400</del></small>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <button class="btn btn-outline-danger btn-sm w-100">+ Keranjang</button>
                    </div>
                </div>
            </div>
      <!--form-->
  <section id="login" py="-5"></section>
      <!--footer-->
  <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Alfamart Online</h5>
                    <p>Solusi belanja kebutuhan harian tanpa harus keluar rumah. Cepat, hemat, dan terpercaya.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Bantuan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50 text-decoration-none">Cara Belanja</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Pengiriman</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold">Ikuti Kami</h5>
                    <p class="text-white-50">Dapatkan info promo terbaru di media sosial kami.</p>
                </div>
            </div>
            <hr class="bg-white">
            <p class="text-center mb-0">&copy; 2024 Alfamart Digital. All Rights Reserved.</p>
        </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="bootstrap-5.3.8-dist/js/bootstrap.min.js"></script>

</body>
</html>