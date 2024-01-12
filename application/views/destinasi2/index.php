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
  <center>
<div class=" contrainer mt-5 mb-4">
    <h3>Paket Wisata</h3>
    <div class="row mt-3">
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="uploads/candiborobudur.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Explore Jawa</h4>
            <p class="durasi-text">Durasi: 5 Hari</p>
            <p class="card-text">Rp. 4.500.000</p>
            <a href="<?= base_url(); ?>pemesanan/tambah" class="btn btn-primary">Pesan</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="uploads/Jepara.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Expedisi Nusantara</h4>
            <p class="durasi-text">Durasi: 7 Hari</p>
            <p class="card-text">Rp.7.499.000</p>
            <a href="<?= base_url(); ?>pemesanan/tambah" class="btn btn-primary">Pesan</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="uploads/jbg.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Expedisi Metropolitan</h4>
            <p class="durasi-text">Durasi: 5 hari</p>
            <p class="card-text">Rp.5.499.000</p>
            <a href="<?= base_url(); ?>pemesanan/tambah" class="btn btn-primary">Pesan</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="uploads/bali.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Urban Adventure</h4>
            <p class="durasi-text">Durasi: 4 Hari</p>
            <p class="card-text">Rp.4.499.000</p>
            <a href="<?= base_url(); ?>pemesanan/tambah" class="btn btn-primary">Pesan</a>
          </div>
        </div>
      </div>
</div>
</div>
</div>

</center>
</body>