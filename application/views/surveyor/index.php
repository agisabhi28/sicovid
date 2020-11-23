<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Covid</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>District Name</th>
                        <th>Status of Check</th>
                        <th>Confirmed Cases</th>
                        <th>ODP</th>
                        <th>PDP</th>
                        <th>Recovered</th>
                        <th>Deaths</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($all as $a) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $a['tanggal']; ?></td>
                            <td><?= $a['nama_kecamatan']; ?></td>
                            <td><?php if ($a['status_cek'] == 1) {
                                    echo "Belum Terverifikasi";
                                } else {
                                    echo "Sudah Terverifikasi";
                                }; ?></td>
                            <td><?= $a['positif']; ?></td>
                            <td><?= $a['odp']; ?></td>
                            <td><?= $a['pdp']; ?></td>
                            <td><?= $a['sembuh']; ?></td>
                            <td><?= $a['meninggal']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>surveyor/update/<?= $a['id_covid']; ?>" class="btn btn-success"><i class="far fa-check-circle"> Accept</i></a>
                                <a href="<?= base_url(); ?>surveyor/tolak/<?= $a['id_covid']; ?>" class="btn btn-danger"><i class="fas fa-times-circle"> Reject</i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>