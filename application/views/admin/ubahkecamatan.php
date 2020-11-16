<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kecamatan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_kecamatan" value="<?= $kecamatan['id_kecamatan']; ?>">
                        <div class="form-grup">
                            <label for="nama">Nama Kecamatan</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $kecamatan['nama_kecamatan']; ?>">
                            <small class="from-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-grup">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= $kecamatan['username']; ?>">
                            <small class="from-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-grup">
                            <label for="pass">Password</label>
                            <input type="text" name="pass" class="form-control" id="pass" value="<?= $kecamatan['password']; ?>">
                            <small class="from-text text-danger"><?= form_error('pass'); ?></small>
                        </div>
                        <br>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>