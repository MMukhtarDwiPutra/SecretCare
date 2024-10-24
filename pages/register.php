<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SecretCare | Register</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
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
            <a class="nav-link color-custom" href="../index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-custom" href="products.html">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-custom" href="gallery.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-custom" href="cari_product.html">Cari Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-custom" href="contact_us.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-custom" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-12 d-flex justify-content-center">
				<div class="card mx-auto my-auto" style="width: 500px; min-height: 300px;">
					<div class="card-body text-center bg-pink color-custom">
						<?php
				    session_start();
				    if (isset($_SESSION['error_message'])) {
				        echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>'.$_SESSION['error_message'].'</strong></div>';
				        // Hapus pesan setelah ditampilkan
				        unset($_SESSION['error_message']);
				    }
				    ?>
						<span><h3>SecretCare</h3></span>
						<h5>Register</h5>
						<form class="mb-4" action="backend/proses_register.php" method="POST">
							<div>
								<input class="form-control mb-1" type="text" placeholder="Username" name="username">
								<input class="form-control mb-1" type="email" placeholder="Email" name="email">
								<input class="form-control mb-1" placeholder="Password" type="password" name="password">
								<input class="form-control" placeholder="Confirm Password" type="password" name="confirm_password">
							</div>
							<button type="submit" class="btn btn-custom mt-4">Register</button>
						</form>
						<span>Sudah punya akun? <a class="color-custom" href="login.html">Login</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="bg-pink text-center mt-auto">
		<div class="container py-3">
		  <p class="color-custom d-flex justify-content-center my-auto">&copy; 2024 SecretCare</p>
		</div>
	</footer>

	
  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>