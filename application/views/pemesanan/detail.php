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
<div class="container mb-5 mt-5">
    <div class="row mt-3">
        <div class="col-md-6 mt-5 mb-5">
                <div class="card">
        <div class="card-header">
           Detail Data Paket Pemesanan
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $pemesanan['nama']?></h5>
            <p class="card-text"><?= $pemesanan['email'];?></p>
            <p class="card-text"><?= $pemesanan['NoHp'];?></p>
            <h6 class="card-title"><?= $pemesanan['paket'];?></h6>
            <a href="<?= base_url(); ?>pemesanan" class="btn btn-primary">Kembali</a>
        </div>
        </div>
        </div>
    </div>
</div>
</body>