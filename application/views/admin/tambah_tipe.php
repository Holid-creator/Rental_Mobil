<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?= base_url('admin/data_tipe/aksi') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Kode Type</label>
                        <input type="text" name="k_tipe" class="form-control">
                        <?= form_error('k_tipe', '<div class="text-danger text-small ml-2">', '</div>') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Type</label>
                        <input type="text" name="n_tipe" class="form-control">
                        <?= form_error('n_tipe', '<div class="text-danger text-small ml-2">', '</div>') ?>
                    </div>

                    <button type="submit" class="btn btn-success"><i class="fas fa-save mr-1"></i>Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </section>
</div>