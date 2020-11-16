<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-12" align="center">
                <div class="alert alert-success alert-dismissible fade show" rol="alert">
                    Data kecamatan <strong> berhasil </strong>
                    <?= $this->session->flashdata('message'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User Kecamatan</h6>
            </div>
            <div class="card-body">
                <a href="<?= base_url(); ?>admin/tambahkecamatan" class="btn btn-success"><i class="fas fa-plus"> Tambah Data</i></a>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($kecamatan as $kec) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $kec['nama_kecamatan']; ?></td>
                                    <td><?= $kec['username']; ?></td>
                                    <td><?= $kec['password']; ?></td>
                                    <td align="center"><a href="<?= base_url(); ?>admin/editkecamatan/<?= $kec['id_kecamatan']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>