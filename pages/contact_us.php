<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SecretCare | About Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
   
  </style>
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

  <!-- Contact Us Header -->
  <section class="contact-header">
    <div class="container">
      <h1 class="display-4">Hubungi Kami</h1>
      <p class="lead">Ada yang bisa kami bantu untuk pencarian anda? Silahkan isi form dibawah untuk masukan dan pertanyaan anda!</p>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="contact-form-section bg-pink">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="backend/contact_us_submit.php" method="POST">
              <div class="row mb-3">
                <div class="form-group col-md-6">
                  <label for="firstName">Nama Depan</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Nama Depan">
                </div>
                <div class="form-group col-md-6">
                  <label for="lastName">Nama Belakang</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Nama Belakang">
                </div>
              </div>
            <div class="form-group mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email">
            </div>
            <div class="form-group mb-3">
              <label for="phoneNumber">Nomor Telepon</label>
              <input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="Nomor Telepon">
            </div>
            <div class="form-group mb-3">
              <label for="country">Negara</label>
              <select class="form-control" id="country" name="country">
                <option>Pilih Negara</option>
                <option>Indonesia</option>
                <option>Malaysia</option>
                <option>Singapura</option>
                <option>Brunei</option>
                <option>Thailand</option>
                <option>Vietnam</option>
                <option>Filipina</option>
                <!-- Tambahkan lebih banyak opsi negara sesuai kebutuhan -->
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="message">Pesan</label>
              <textarea class="form-control" name="message" id="message" rows="5" placeholder="Tulis pesan Anda di sini"></textarea>
            </div>
            <button type="submit" class="btn btn-custom btn-block">Kirim Pesan</button>
          </form>
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

    
  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>