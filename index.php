<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SecretCare | Home</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-pink">
	    <div class="container">
	      <span class="color-custom"><h5>SecretCare</h5></span>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
	        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarNav">
	        <!-- Gunakan 'ml-auto' di sini untuk mendorong item ke kanan -->
	        <ul class="navbar-nav ms-auto">
	          <li class="nav-item">
	            <a class="nav-link color-custom" href="index.php">Home</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link color-custom" href="pages/products.html">Products</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link color-custom" href="pages/gallery.html">Gallery</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link color-custom" href="pages/cari_product.html">Cari Product</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link color-custom" href="pages/contact_us.php">Contact Us</a>
	          </li>
	          <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
	          	<li class="nav-item"><a class="nav-link color-custom" href="pages/backend/proses_logout.php">Logout</a></li>
	      	  <?php else: ?>
	      	  	<li class="nav-item"><a class="nav-link color-custom" href="pages/login.php">Login</a></li>
	      	  <?php endif; ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
	<div class="d-flex flex-column min-vh-100">
		<!-- Hero Section -->
		<section class="hero-section pt-5 bg-white">
			<div class="container">
			  <h1 class="display-4">Selamat Datang di SecretCare</h1>
			  <p class="lead">Perawatan Kulit Terbaik untuk Anda</p>
			  <a href="pages/products.html" class="btn btn-custom btn-lg">Lihat Product</a>
			</div>
		</section>

		<div id="demo" class="carousel slide mb-5" data-bs-ride="carousel">

		  <!-- Indicators/dots -->
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
		    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
		    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		  </div>

		  <!-- The slideshow/carousel -->
		  <div class="carousel-inner d-flex align-items-center">
		    <div class="carousel-item active">
		      	<img src="assets/img/wardah_carousel.png" alt="Chicago" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="assets/img/skintific_carousel.png" alt="Chicago" class="d-block w-100">
		    </div>
		    <div class="carousel-item">
		      <img src="assets/img/avoskin_carousel.png" alt="Chicago" class="d-block w-100">
		    </div>
		  </div>

		  <!-- Left and right controls/icons -->
		  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </button>
		</div>

		<!-- About Us Header -->
		  <section class="hero-section pt-5 bg-white">
		    <div class="container">
		      <h1 class="display-4">Tentang Kami</h1>
		      <p class="lead">Kami adalah perusahaan yang berdedikasi untuk mencarikan skin care terbaik bagi Anda.</p>
		    </div>
		  </section>

		  <!-- About Us Content -->
		  <section class="about-section bg-pink py-5">
		    <div class="container">
		      <div class="row">
		        <div class="col-md-6">
		          <h2>Siapa Kami?</h2>
		          <p>Kami adalah perusahaan perawatan kulit yang didirikan untuk membantu Anda mendapatkan kulit yang sehat
		            dan bersinar. Dengan produk berkualitas tinggi, kami berkomitmen untuk memberikan
		            solusi terbaik bagi perawatan kulit Anda.</p>
		        </div>
		        <div class="col-md-6">
		          <h2>Misi Kami</h2>
		          <p>Misi kami adalah mencarikan produk perawatan kulit yang aman, efektif, dan ramah lingkungan. Kami
		            percaya bahwa setiap orang berhak mendapatkan kulit yang sehat dan cantik tanpa kompromi.</p>
		        </div>
		      </div>
		    </div>
		  </section>

		  <!-- Our Values -->
		  <section class="hero-section bg-white">
		    <div class="container">
		      <div class="row min-v-100">
		        <div class="col-md-4 mb-sm-3">
		          <div class="card bg-pink text-center">
		            <div class="card-body py-lg-5">
		              <h5 class="card-title">Kualitas</h5>
		              <p class="card-text">Kami menjual barang skin care yang terpercaya dan keasliannya yang terjaga.</p>
		            </div>
		          </div>
		        </div>
		        <div class="col-md-4 mb-sm-3">
		          <div class="card bg-pink text-center">
		            <div class="card-body py-lg-5">
		              <h5 class="card-title">Kepercayaan</h5>
		              <p class="card-text">Kepercayaan pelanggan adalah prioritas kami. Kami membantu mencari kebutuhan Anda.</p>
		            </div>
		          </div>
		        </div>
		        <div class="col-md-4 mb-sm-3">
		          <div class="card bg-pink text-center">
		            <div class="card-body py-lg-5">
		              <h5 class="card-title">Konsultasi</h5>
		              <p class="card-text">Kami bisa memberikan produk terbaik sesuai dengan tipe skin Anda.</p>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </section>

		  <!-- Meet the Team -->
		  <section class="team-section bg-pink py-5">
		    <div class="container">
		      <h2 class="text-center">Tim Kami</h2>
		      <div class="row">
		        <div class="col-md-4 text-center">
		          <img src="assets/img/johndoe.png" class="rounded-circle img-custom mb-3" alt="Tim 1">
		          <h5>John Doe</h5>
		          <p>CEO</p>
		        </div>
		        <div class="col-md-4 text-center">
		          <img src="assets/img/profile.jpeg" class="rounded-circle img-custom mb-3" alt="Tim 2">
		          <h5>Muhammad Mukhtar</h5>
		          <p>Backend Developer</p>
		        </div>
		        <div class="col-md-4 text-center">
		          <img src="assets/img/rianajoe.png" class="rounded-circle img-custom mb-3" alt="Tim 3">
		          <h5>Riana Joe</h5>
		          <p>Frontend Developer</p>
		        </div>
		      </div>
		    </div>
		  </section>

		<!-- Footer -->
		<footer class="bg-pink text-center mt-auto">
			<div class="container py-3">
			  <p class="color-custom d-flex justify-content-center my-auto">&copy; 2024 SecretCare</p>
			</div>
		</footer>
	</div>
	
  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>