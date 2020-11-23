<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Covid</h6>
                    <?= $this->session->flashdata('flash'); ?>
                </div>

                <div class="card-body">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="tanggal">Date</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?> </small>

                        </div>

                        <input type="hidden" name="status_cek" value="1">

                        <input type="hidden" name="id_kecamatan" value="<?= $id_kecamatan; ?>">

                        <div class="form-group">
                            <label for="positif">Confirmed Cases</label>
                            <input type="number" name='positif' class="form-control" id="positif">
                            <small class="form-text text-danger"><?= form_error('positif'); ?> </small>

                        </div>

                        <div class="form-group">
                            <label for="odp">ODP</label>
                            <input type="number" name='odp' class="form-control" id="odp">
                            <small class="form-text text-danger"><?= form_error('odp'); ?> </small>

                        </div>
                        <div class="form-group">
                            <label for="pdp">PDP</label>
                            <input type="number" name='pdp' class="form-control" id="pdp">
                            <small class="form-text text-danger"><?= form_error('pdp'); ?> </small>

                        </div>
                        <div class="form-group">
                            <label for="sembuh">Recovered</label>
                            <input type="number" name='sembuh' class="form-control" id="sembuh">
                            <small class="form-text text-danger"><?= form_error('sembuh'); ?> </small>

                        </div>
                        <div class="form-group">
                            <label for="meninggal">Deaths</label>
                            <input type="number" name='meninggal' class="form-control" id="meninggal">
                            <small class="form-text text-danger"><?= form_error('meninggal'); ?> </small>

                        </div>
                        <a href="<?= base_url('kecamatan'); ?>" class="btn btn-danger">Back</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Add </button>



                    </form>


                </div>
            </div>
        </div>



    </div>

</div>
</div>