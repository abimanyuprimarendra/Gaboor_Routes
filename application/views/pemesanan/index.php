<style>
    .btn{
        margin-left:5px;
    }
    </style>
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
<div class="container mb-5 mt-5">
    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pemesanan <strong>Berhasil</strong> <?= $this->session->flashdata('flash');?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
        </div>
        <?php endif; ?>
<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url(); ?>pemesanan/tambah" class="btn btn-primary">Tambah Pemesanan</a>
    </div>
</div>
    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Paket Pemesanan</h3>
        <ul class="list-group">
            <?php foreach ($pemesanan as $pms) : ?>
        <li class="list-group-item">
            <?= $pms['nama'];?>
            <a href="<?= base_url(); ?>pemesanan/hapus/<?= $pms['id'];?>" class="btn btn-danger float-right" onclick="return confirm('Yakin?');">Hapus</a>
            <a href="<?= base_url(); ?>pemesanan/detail/<?= $pms['id'];?>" class="btn btn-primary float-right">Detail</a>
            <a href="<?= base_url(); ?>pemesanan/ubah/<?= $pms['id'];?>" class="btn btn-success float-right">Ubah</a>
        </li>
        <?php endforeach; ?>

        </ul>
        </div>
</div>

</div>