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
<div class="container mb-4">
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="card">
        <div class="card-header">
            Form Ubah Data
        </div>
        <div class="card-body">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $pemesanan['id'];?>">
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?= $pemesanan['nama']; ?>">
            <small  class="form-text text-danger"><?= form_error('nama');?></small>
            </div>
            <div class="form-group"> 
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="<?= $pemesanan['email']; ?>">
            <small  class="form-text text-danger"><?= form_error('email');?></small>
            </div>
            <div class="form-group">
            <label for="NoHp">No Hp</label>
            <input type="text" name="NoHp" class="form-control" id="NoHp" value="<?= $pemesanan['NoHp']; ?>">
            <small  class="form-text text-danger"><?= form_error('NoHp');?></small>
            </div>`
            <div class="form-group">
            <label for="paket">Paket</label>
            <select class="form-control" id="paket" name="paket">
                <?php foreach( $paket as $p ) : ?>
            <?php if($p == $pemesanan['paket']) : ?>
            <option value="<?= $p; ?>" selected><?= $p; ?>
        </option>
            <?php else : ?>
                <option value="<?= $p; ?>"><?= $p; ?>
        </option>
            <?php endif; ?>
            <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Paket</button>
            
        </form>
        </div>
        </div>
        </div>
    </div>
</div>
</body>