<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Covid Keseluruhan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Kecamatan</th>
                            <th>Positif</th>
                            <th>Orang Dalam Pengawasan</th>
                            <th>Pasien Dalam Pengawasan</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                            <th>Surveyor</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($all as $s) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s['tanggal']; ?></td>
                                <td><?= $s['nama_kecamatan']; ?></td>
                                <td><?= $s['positif']; ?></td>
                                <td><?= $s['odp']; ?></td>
                                <td><?= $s['pdp']; ?></td>
                                <td><?= $s['sembuh']; ?></td>
                                <td><?= $s['meninggal']; ?></td>
                                <td><?= $s['nama']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>