<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
    </section>
    <?php foreach ($transaksi as $trans) : ?>
        <form method="post" action="<?= base_url('admin/transaksi/trans_slaksi') ?>">
            <input type="hidden" name="id_rental" value="<?= $trans->id_rental ?>">
            <input type="hidden" name="tgl_kem" value="<?= $trans->tgl_kem ?>">
            <input type="hidden" name="denda" value="<?= $trans->denda ?>">
            <div class="form-group">
                <label for="">Tanggal Pengembalian</label>
                <input type="date" name="tgl_peng" class="form-control" value="<?= $trans->tgl_peng ?>">
            </div>
            <div class="form-group">
                <label for="">Status Pengembalian</label>
                <select name="st_peng" class="form-control">
                    <option value="<?= $trans->st_peng ?>"><?= $trans->st_peng ?></option>
                    <option value="Kembali">Kembali</option>
                    <option value="Belum Kembali">Belum Kembali</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Status Rental</label>
                <select name="st_rent" class="form-control">
                    <option value="<?= $trans->st_rent ?>"><?= $trans->st_rent ?></option>
                    <option value="Selesai">Selesai</option>
                    <option value="Belum Selesai">Belum Selesai</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success"><i class="fas fa-save mr-1"></i>Save</button>
        </form>
    <?php endforeach ?>
</div>