<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha384-rnsu6Zmz5qIHIH1LRdLhF9GKbqUH3/5LSvzkYRcvR2MZ+IAi+a89Br1SmKotNdgw"
    crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/header.css">
  <title><?php echo $judul; ?></title>


</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-dark">
    <button class="toggle-button" onclick="toggleNav('')">☰</button>
    
      <div class="container container-fluid">
        <a class="navbar-brand text-white" href="#">Gaboor Routes</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item text-white nav-link" href="<?= base_url(); ?>">Home <span
                class="sr-only">(current)</span></a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="layananDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" style="color: white;">Layanan</a>
              <div class="dropdown-menu" aria-labelledby="layananDropdown">
                <a class="dropdown-item" href="<?= base_url('destinasi'); ?>">Tour</a>
                <a class="dropdown-item" href="<?= base_url('destinasi2'); ?>">Paket Wisata</a>
              </div>
            </li>
            <a class="nav-item text-white nav-link" href="<?= base_url('kontak');?>">Kontak</a>
          </div>
        </div>
        <div class="navbar-nav ml-auto">
          <form action="<?= base_url('login'); ?>" method="post" class="form-inline">
            <button type="submit" class="btn my-2 my-sm-0" style="color: white; background-color: red;">Login</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <!-- Your main content goes here -->

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

    <script>
    function toggleNav() {
      $('.offcanvas-collapse').toggleClass('open');
    }
  </script>
</body>

</html>
