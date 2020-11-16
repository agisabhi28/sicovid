<div class="container">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User Kecamatan</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-grup">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                    <small class="from-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-grup">
                    <label for="nama">Username</label>
                    <input type="text" name="username" class="form-control" id="nama">
                    <small class="from-text text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-grup">
                    <label for="sandi">Password</label>
                    <input type="text" name="sandi" class="form-control" id="sandi">
                    <small class="from-text text-danger"><?= form_error('sandi'); ?></small>
                </div>
                <br>
                <input type="hidden" name="status" value="2">
                <a href="<?= base_url(); ?>admin/data_surveyor" class="btn btn-danger">Kembali</a>
                <button type="submit" name="tambah" class="btn btn-primary ">Tambah Akun</button>
            </form>
        </div>
    </div>
</div>