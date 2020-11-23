<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Covid Kecamatan <?= $kecamat['nama_kecamatan']; ?></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Covid</h6>
        </div>
        <div class="card-body">
            <a href="<?= base_url(); ?>kecamatan/tambah" class="btn btn-success"><i class="fas fa-plus"> Tambah Data</i></a>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>District</th>
                            <th>Check Status</th>
                            <th>Confirmed Cases</th>
                            <th>ODP</th>
                            <th>PDP</th>
                            <th>Recovered</th>
                            <th>Deaths</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($kecamatan as $kcm) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kcm['tanggal']; ?></td>
                                <td><?= $kcm['nama_kecamatan']; ?></td>
                                <td><?php if ($kcm['status_cek'] == 1) {
                                        echo "Belum Terverifikasi";
                                    } else {
                                        echo "Sudah Terverifikasi";
                                    }; ?></td>
                                <td><?= $kcm['positif']; ?></td>
                                <td><?= $kcm['odp']; ?></td>
                                <td><?= $kcm['pdp']; ?></td>
                                <td><?= $kcm['sembuh']; ?></td>
                                <td><?= $kcm['meninggal']; ?></td>
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