<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
    </section>
    <form action="<?= base_url('admin/laporan') ?>" method="post">
        <div class="form-group">
            <label for="">Dari Tanggal</label>
            <input type="date" class="form-control" name="dari">
            <?= form_error('dari', '<div class="text-danger text-small ml-2">', '</div>') ?>
        </div>
        <div class="form-group">
            <label for="">Sampai Tanggal</label>
            <input type="date" class="form-control" name="sampai">
            <?= form_error('sampai', '<div class="text-danger text-small ml-2">', '</div>') ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-eye mr-1"></i>Tampilkan Data</button>
    </form>
</div>