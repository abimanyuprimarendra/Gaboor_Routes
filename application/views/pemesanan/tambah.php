
<div class="container mb-4">
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="card">
        <div class="card-header">
            Form Tambah Pemesanan
        </div>
        <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
            <small  class="form-text text-danger"><?= form_error('nama');?></small>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email">
            <small  class="form-text text-danger"><?= form_error('email');?></small>
            </div>
            <div class="form-group">
            <label for="NoHp">No Hp</label>
            <input type="text" name="NoHp" class="form-control" id="NoHP">
            <small  class="form-text text-danger"><?= form_error('NoHp');?></small>
            </div>
            <div class="form-group">
            <label for="paket">Paket</label>
            <select class="form-control" id="paket" name="paket">
            <option value="Explore Jawa : Rp.4.500.000,-">Explore Jawa : Rp.4.500.000,-</option>
            <option value="Ekspedisi Nusantara : Rp.7.499.000,-">Ekspedisi Nusantara : Rp.7.499.000,-</option>
            <option value="Metropolitan Harmoni : Rp.6.799.000,-">Metropolitan Harmoni : Rp.6.799.000,-</option>
            <option value="Urban Adventure Urban Adventure : Rp.2.200.000,-">Urban Adventure : Rp.2.200.000,-</option>
            </select>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Paket</button>
            
        </form>
        </div>
        </div>
        </div>
    </div>
</div>