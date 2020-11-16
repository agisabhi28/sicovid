<html>



<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="card shadow mb-4">
                    <?php foreach ($all_today as $all) : ?>
                        <div class="card-header py-9">
                            <h6 class="m-0 font-weight-bold text-primary">Data Terkini</h6>
                            <h6 class="m-0 font-weight-bold text-primary"><?= $all['tanggal']; ?></h6>
                        </div>


                        <div class="row">
                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-danger shadow h-100 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Positif</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all['positif']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-plus fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            
                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-primary shadow h-150 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Orang Dalam Pengawasan</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all['odp']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-danger shadow h-150 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pasien Dalam Pengawasan</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all['pdp']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-medkit fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sembuh</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all['sembuh']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-check-square fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-dark shadow h-100 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Meninggal</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all['meninggal']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-heartbeat fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>
                        <?php endforeach; ?>

                        </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-9">
                        <h6 class="m-0 font-weight-bold text-primary">Data Keseluruhan</h6>
                        <h6 class="m-0 font-weight-bold text-primary">Sampai : <?= $all['tanggal']; ?></h6>
                    </div>
                    <?php foreach ($all_sum as $alls) : ?>
                        <div class="row">

                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-danger shadow h-100 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Positif</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $alls['positif']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-plus fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            
                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-primary shadow h-150 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Orang Dalam Pengawasan</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $all['odp']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-danger shadow h-150 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pasien Dalam Pengawasan</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $alls['pdp']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-medkit fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sembuh</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $alls['sembuh']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-check-square fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>

                            <div class="col-xl-6 col-md-6 mb-4">
                                          <div class="card border-left-dark shadow h-100 py-2">
                                            <div class="card-body">
                                              <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Meninggal</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $alls['meninggal']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                  <i class="fas fa-heartbeat fa-2x text-gray-300"></i>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                            </div>
                        </div>
                    <?php endforeach;  ?>

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-9">
                        <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                    </div>
                    <div class="card-body">
                        <?php

                        $tanggal = array();
                        $positif = array();
                        $odp = array();
                        $pdp = array();
                        $meninggal = array();
                        $sembuh = array();
                        ?>
                        <?php foreach ($all_date as $all) {
                            $tanggal[]     = ($all['tanggal']);
                            $positif[]     = intval($all['positif']);
                            $odp[]         = intval($all['odp']);
                            $pdp[]         = intval($all['pdp']);
                            $sembuh[]         = intval($all['sembuh']);
                            $meninggal[]         = intval($all['meninggal']);
                        }



                        ?>

                        <div id="container"></div>
                        <script src="assets/highcharts/highcharts.js"></script>
                        <script src="assets/highcharts/exporting.js"></script>
                        <script src="assets/highcharts/export-data.js"></script>
                        <script src="assets/highcharts/accessibility.js"></script>

                        <script>
                            Highcharts.chart('container', {
                                chart: {
                                    type: 'area'
                                },
                                title: {
                                    text: 'GRAFIK COVID KOTA X'
                                },
                                subtitle: {
                                    text: ''
                                },
                                xAxis: {
                                    categories: <?= json_encode($tanggal); ?>,
                                    tickmarkPlacement: 'on',
                                    title: {
                                        enabled: false
                                    }
                                },
                                yAxis: {
                                    title: {
                                        text: 'Jumlah'
                                    },
                                    labels: {
                                        formatter: function() {
                                            return this.value;
                                        }
                                    }
                                },
                                tooltip: {
                                    split: false,
                                    valueSuffix: ''
                                },
                                plotOptions: {
                                    area: {
                                        stacking: 'normal',
                                        lineColor: '#666666',
                                        lineWidth: 1,
                                        marker: {
                                            lineWidth: 1,
                                            lineColor: '#666666'
                                        }
                                    }
                                },
                                series: [{
                                    name: 'Positif',
                                    data: <?= json_encode($positif); ?>
                                }]
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>


        <!-- DataTables Example -->
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
                                <th>Nama Kecamatan</th>
                                <th>Positif</th>
                                <th>Orang Dalam Pengawasan</th>
                                <th>Pasien Dalam Pengawasan</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($sum as $s) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $s['nama_kecamatan']; ?></td>
                                    <td><?= $s['positif']; ?></td>
                                    <td><?= $s['odp']; ?></td>
                                    <td><?= $s['pdp']; ?></td>
                                    <td><?= $s['sembuh']; ?></td>
                                    <td><?= $s['meninggal']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <center><a class="btn btn-warning" href="<?= base_url('admin/pdf'); ?>">Cetak Laporan</a></center>
        <hr>
        <?php //Ambil SCript Card Using Grid Markup di getbootstrap.com 
        ?>

    </div>
</body>

</html>