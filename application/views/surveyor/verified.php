<!-- DataTales Example -->
<div class="container-fluid">


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Covid Terverifikasi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kecamatan</th>
                            <th>Status Cek</th>
                            <th>Positif</th>
                            <th>ODP</th>
                            <th>PDP</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                            <th>Nama Surveyor</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($covid as $a) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
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
                                <td><?= $a['nama']; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>