<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/market.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('awesome/css/all.min.css')}}">
    <title>Market | MASeKO</title>
  </head>
  <body>

<x-navbar></x-navbar>
    <!-- Slide Show -->
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('foto/img1.png')}}" class="d-block img-fluid" alt="iklan">
        </div>
        <div class="carousel-item">
          <img src="{{asset('foto/img2.png')}}" class="d-block img-fluid" alt="iklan">
        </div>
        <div class="carousel-item">
          <img src="{{asset('foto/img3.png')}}" class="d-block img-fluid" alt="iklan">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
    <!-- End Slides Show -->

    <!-- Kategori -->
    <div class="container mt-3">
      <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px">
        <h5 class="text-center mt-2">KATEGORI</h5>
      </div>
      <div class="row text-center row-container mt-2">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/baju.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/celana.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/elektronik.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/fotografi.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/hp.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/baju.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/baju.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/sepatu.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/tas.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/otomotif.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/laptop.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu-kategori">
            <a href="#"><img src="../foto/Kategori/baju.png" class="foto-kategori mt-3"></a>
            <p class="mt-2">Barang</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Kategori -->
     <!-- Lelang -->
    <div class="container mt-2">
      <div class="judul-produk" style="background-color: #fff; padding: 5px 10px">
        <h5 class="text-center mt-2">Lelang</h5>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 1</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 600.000</p>
              <a href="{{route('spekproduk')}}" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 2</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 1.200.000</p>
              <a href="{{route('spekproduk')}}" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 3</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 770.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 4</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 990.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 5</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 200.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 6</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 8.500.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>
    <!-- End Lelang -->

    <!-- Produk -->
    <div class="container mt-2">
      <div class="judul-produk" style="background-color: #fff; padding: 5px 10px">
        <h5 class="text-center mt-2">Produk</h5>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 1</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 600.000</p>
              <a href="{{route('spekproduk')}}" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 2</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 1.200.000</p>
              <a href="{{route('spekproduk')}}" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 3</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 770.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 4</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 990.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 5</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 200.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
          <div class="card text-center">
            <img src="../foto/produk/produk.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6 class="card-title">Produk 6</h6>
              <div class="bintang" style="color: #28f75f;">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <p class="card-text mt-2">Rp. 8.500.000</p>
              <a href="../pages/spekproduk.html" class="btn d-grid">Beli</a>
            </div>
          </div>
        </div>
    <!-- End Produk -->

    <!-- Footer  -->
    <footer class="bg-light p-5 mt-5">
      <div class="container">
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img src="../foto/logo.png" style="width: 50px;">
            </a>
            <span>Copyright @2021 | Created by MASeKO</span>
          </div>

          <div class="col-md-6 text-md-end text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none ">
              <img src="../foto/sosialmedia/instagram.png" class="ms-2" style="width: 30px;">
            </a>
            <a href="#" class="text-decoration-none">
              <img src="../foto/sosialmedia/twitter.png" class="ms-2" style="width: 30px;">
            </a>
            <a href="#" class="text-decoration-none">
              <img src="../foto/sosialmedia/facebook.png" class="ms-2"  style="width: 32px;">
            </a>
            <a href="#" class="text-decoration-none">
              <img src="../foto/sosialmedia/linkedin.png" class="ms-2" style="width: 30px;">
            </a>
          </div>


        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
