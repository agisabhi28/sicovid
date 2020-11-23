<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Covid Reject Kecamatan <?= $kecamat['nama_kecamatan']; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kecamatan</th>
                            <th>Status Cek</th>
                            <th>Positif</th>
                            <th>ODP</th>
                            <th>PDP</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($kecamatan as $kcm) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kcm['tanggal']; ?></td>
                                <td><?= $kcm['nama_kecamatan']; ?></td>
                                <td><?php if ($kcm['status_cek'] == 3) {
                                        echo "Ditolak";
                                    } else {
                                        echo "Verifikasi";
                                    }; ?></td>
                                <td><?= $kcm['positif']; ?></td>
                                <td><?= $kcm['odp']; ?></td>
                                <td><?= $kcm['pdp']; ?></td>
                                <td><?= $kcm['sembuh']; ?></td>
                                <td><?= $kcm['meninggal']; ?></td>
                                <td><a href="<?= base_url(); ?>kecamatan/editTolak/<?= $kcm['id_covid']; ?>" class="btn btn-primary">Edit</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->