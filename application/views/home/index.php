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
  padding-top: 1px; /* Sesuaikan dengan tinggi navbar Anda */
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
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 " src="uploads/travel.PNG" alt="Slide Pertama">
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
</div>
</div>
  <div class="container mt-5">
  <div class="mt-5 text-center">
  <h2 class="mb-5">Layanan</h2>
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

<div class="container mt-5">
<div class="mt-5 text-center">
    <h2 class="mb-4">Tentang Kami</h2>
    <div class="text-center bg- text-black p-3">
        <p>Gaboor Routes, bukan hanya sekadar web travel biasa. Kami adalah teman setia untuk setiap petualangan Anda. Dengan komitmen untuk memberikan pengalaman perjalanan yang tak terlupakan, kami menghadirkan destinasi perjalanan yang menakjubkan melalui galeri gambar berkualitas tinggi dalam carousel kami.
            Sebagai perantara antara impian dan kenyataan, kami tidak hanya menawarkan informasi tentang destinasi wisata, tetapi juga menjadi pemandu setia Anda dalam merencanakan perjalanan yang penuh makna. Dalam setiap klik dan guliran layar, kami hadir untuk menginspirasi dan membimbing Anda menjelajahi keindahan dunia ini.
            Kami memahami bahwa perjalanan adalah tentang cerita. Oleh karena itu, melalui visualisasi yang indah, kami berusaha untuk menghadirkan pengalaman awal sebelum Anda benar-benar menginjakkan kaki di destinasi yang Anda impikan. Di sini, setiap gambar adalah jendela menuju petualangan, dan setiap kata adalah undangan untuk memulai perjalanan tak terlupakan.
            Gaboor Routes bukan hanya tentang destinasi, tetapi juga tentang cerita-cerita yang tercipta di sepanjang perjalanan Anda. Kami adalah komunitas pelancong yang menyatukan orang-orang dengan hasrat untuk menjelajahi dan menciptakan kenangan yang abadi. Temukan lebih banyak tentang destinasi yang menakjubkan, temukan mitra perjalanan, dan raih pengalaman tak terlupakan bersama kami.
            Selamat datang di Gaboor Routes, di mana setiap klik adalah awal dari petualangan baru. Kami bangga menjadi bagian dari cerita perjalanan Anda.</p>
        <p>Temukan informasi lebih lanjut tentang destinasi ini dan rencanakan perjalanan Anda bersama kami!</p>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJjtm3YqEveLjL1C5rkkj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
