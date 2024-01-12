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
    <div class="container mt-5 mb-4">
      <h3>Destinasi</h3>
      <div class="row mt-3">
        <?php foreach ($produk as $item) { ?>
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <!-- Tampilkan data sesuai kebutuhan -->
              <img class="card-img-top" src="<?php echo base_url('uploads/'.$item['foto']); ?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><strong><?php echo $item['destinasi']; ?></strong></h4>
                <p class="durasi-text"><?php echo $item['keterangan']; ?></p>
                <p class="card-text "><strong>Rp. <?php echo $item['harga']; ?></strong></p>
                <a href="<?= base_url(); ?>pemesanan/tambah" class="btn btn-primary">Pesan</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </center>
</body>
</html>
