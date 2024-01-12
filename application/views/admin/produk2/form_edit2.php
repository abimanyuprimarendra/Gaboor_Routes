<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <br> 
    <div class="container">
        <h1>Edit Destinasi</h1>
        <br>
        <form form action="<?php echo site_url('Crud_produk/aksi_edit'); ?>" method="POST">
        <input type="hidden" name="katalog_id" value="<?php echo $produk['katalog_id'];?>">
          <div class="row mb-3">
            <label for="inputDestinasi" class="col-sm-2 col-form-label">Destinasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="destinasi" name="destinasi" value="<?php echo $produk['destinasi'];?>">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $produk['keterangan'];?>">
            </div>
          </div>
          
          <div class="row mb-3">
            <label for="inputKeterangan" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $produk['harga'];?>">
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $produk['foto'];?>">
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="simpan" value="Simpan">Simpan</button>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>