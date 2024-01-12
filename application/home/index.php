<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Destinasi Wisata</title>
</head>
<style>
  .fixed-top-navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000; /* Sesuaikan dengan kebutuhan */
  /* Tambahkan properti styling lainnya */
}

body {
  padding-top: 0px; /* Sesuaikan dengan tinggi navbar Anda */
}
</style>

  <script>
  document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.getElementById("navbar"); // Ganti "navbar" dengan id navbar Anda
    var offset = navbar.offsetTop;

    function handleScroll() {
      if (window.pageYOffset >= offset) {
        navbar.classList.add("fixed-top-navbar");
      } else {
        navbar.classList.remove("fixed-top-navbar");
      }
    }

    window.addEventListener("scroll", handleScroll);
  });
</script>
<body>
</nav>
<div class="container mt-5">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="uploads/travel.PNG" alt="Slide Pertama">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="uploads/travel2.jpg" alt="Slide Kedua">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Sebelumnya</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Berikutnya</span>
    </a>
  </div>

  <div class="mt-5 text-center">
    <h2>Layanan Kami</h2>
    <p></p>
    <div class="row">
      <div class="col-md-6">
        <a href="<?= base_url('destinasi');?>">
          <img src="uploads/tour.jpeg" alt="Tour" class="img-fluid">
        </a>
      </div>
      <div class="col-md-6">
        <a href="<?= base_url('destinasi2');?>">
          <img src="uploads/paket.jpeg" alt="Paket Wisata" class="img-fluid" href="<?= base_url()?>"> 
        </a>
      </div>
    </div>
    
  </div>
</div>


  <div class="mt-3 text-center">
    <h2>Tentang Kami</h2>
    <p>Web Travel ini menyajikan berbagai destinasi perjalanan yang menakjubkan. Nikmati pengalaman visual melalui gambar-gambar berkualitas tinggi yang kami sajikan di carousel di atas.</p>
    <p>Temukan informasi lebih lanjut tentang destinasi ini dan rencanakan perjalanan Anda bersama kami!</p>
  </div>
</div>
</body>