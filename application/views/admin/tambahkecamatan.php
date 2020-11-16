<div class="container-fluid">


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User Kecamatan</h6>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-grup">
                    <label for="nama">Nama Kecamatan</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                    <small class="from-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-grup">
                    <label for="pengguna">Username</label>
                    <input type="text" name="username" class="form-control" id="pengguna">
                    <small class="from-text text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-grup">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" class="form-control" id="pass">
                    <small class="from-text text-danger"><?= form_error('pass'); ?></small>
                </div>
                <br>
                <div class="form-grup">
                    <a href="<?= base_url(); ?>admin/data_kecamatan" class="btn btn-danger">Kembali</a>
                    <button type="submit" name="tambah" class="btn btn-primary ">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>



</div>