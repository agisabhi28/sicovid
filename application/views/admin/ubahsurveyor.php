<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Akun Surveyor
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_akun" value="<?= $surveyor['id_akun']; ?>">
                        <div class="form-grup">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $surveyor['nama']; ?>">
                            <small class="from-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-grup">
                            <label for="nama">Username</label>
                            <input type="text" name="username" class="form-control" id="nama" value="<?= $surveyor['username']; ?>">
                            <small class="from-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-grup">
                            <label for="sandi">Password</label>
                            <input type="text" name="sandi" class="form-control" id="sandi" value="<?= $surveyor['password']; ?>">
                            <small class="from-text text-danger"><?= form_error('sandi'); ?></small>
                        </div>
                        <div class="form-grup">
                            <input type="hidden" name="status" value="2">
                        </div> <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>