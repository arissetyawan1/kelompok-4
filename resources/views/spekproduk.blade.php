<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/spekproduk.css')}}">
    <link rel="stylesheet" type="text/css" href="../awesome/css/all.min.css">
	<title>Produk</title>
</head>
<body>
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #b7f7d4;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../foto/logo.png" alt="" width="50" height="50" class="me-2">
          MASeKO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto my-4 my-lg-0">
            <input class="form-control me-2" type="search" placeholder="Cari Barang" aria-label="Search">
            <button class="btn" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Notifikasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bantuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Breadcrumb -->
    <div class="container">
    	<nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-2">
		  <ol class="breadcrumb p-3">
		    <li class="breadcrumb-item"><a href="../pages/market.html" class="text-decoration-none">Market</a></li>
		    <li class="breadcrumb-item"><a href="../pages/market.html" class="text-decoration-none">Kategori</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Produk</li>
		  </ol>
		</nav>
    </div>
    <!-- End Breadcrumb -->

    <!-- Single Produk -->
    <div class="container">
    	<div class="row row-produk">
    		<div class="col-lg-5">
    			<figure class="figure">
				  <img src="../foto/produk/produk.jpg" class="figure-img img-fluid" alt="Gambar Produk" style="border-radius: 5px; width: 450px;">

				  <figcaption class="figure-caption d-flex justify-content-evenly">
				  	<a href="#">
				  		<img src="../foto/produk/produk.jpg" class="figure-img img-fluid" alt="Gambar Produk" style="border-radius: 5px; width: 70px;">
				  	</a>
				  	<a href="#">
				  		<img src="../foto/produk/produk.jpg" class="figure-img img-fluid" alt="Gambar Produk" style="border-radius: 5px; width: 70px;">
				  	</a>
				  	<a href="#">
				  		<img src="../foto/produk/produk.jpg" class="figure-img img-fluid" alt="Gambar Produk" style="border-radius: 5px; width: 70px;">
				  	</a>
				  	<a href="#">
				  		<img src="../foto/produk/produk.jpg" class="figure-img img-fluid" alt="Gambar Produk" style="border-radius: 5px; width: 70px;">
				  	</a>
				  	<a href="#">
				  		<img src="../foto/produk/produk.jpg" class="figure-img img-fluid" alt="Gambar Produk" style="border-radius: 5px; width: 70px;">
				  	</a>
				  </figcaption>

				</figure>
    		</div>
    		<div class="col-lg-7">
    			<h4>Nama Produk</h4>
    			<div class="garis-nama"></div>
    			<div class="data-produk col-lg-7 mb-3 d-flex">
    				<a href="#" style="color: #faaa5f;" class="me-2">4.0</a>
    				<a href="#" class="bintang me-2">
	    				<i class="fas fa-star"></i>
				        <i class="fas fa-star"></i>
			            <i class="fas fa-star"></i>
			            <i class="fas fa-star"></i>
			            <i class="far fa-star"></i>
			        </a>
			        <p class="me-2">| <a href="#" class="nilai ms-2">155 </a><a href="#" class="nilai1 text-muted me-2">Penilaian</a> |</p>
	    			<p class="me-2">200 Terjual</p>
		    	</div>
		    	<div class="harga" style="background-color: #daf7e2;">
	    			<h3 class="text-muted mb-3 p-2" style="background-color: #faaa5f;">Rp. 600.000</h3>
	    			<div class="ms-2">
		    			<h5>Spesifikasi Produk</h5>
		    			<p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    			consequat.</p>
	    			</div>
	    			<div class="ms-2">
		    			<h5 class="mt-2">Deskripsi Produk</h5>
		    			<p style="font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		    			consequat.</p>
	    			</div>
	    			<div class="ms-2">
		    			<button type="button" class="btn btn-sm"><i class="fas fa-minus"></i></button>
		    			<span class="mx-2">5</span>
		    			<button type="button" class="tambah btn btn-sm"><i class="fas fa-plus"></i></button>
		    			<span class="mx-2">Tersisa 50 Pcs</span>
	    			</div>
	    			<div class="btn-produk mt-4 ms-2">
	    				<a href="#" class="btn btn-lg me-2 btn-custom"><i class="fas fa-shopping-cart fs-6 me-2"></i>Masukan Keranjang</a>
	    				<a href="{{route('dashboard')}}" class="btn btn-lg btn-custom my-2">Beli Sekarang</a>
	    			</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- End Single Produk -->

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
</body>
</html>
