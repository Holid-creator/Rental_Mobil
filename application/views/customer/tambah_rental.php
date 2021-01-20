<div class="container">
    <div class="card mb-5" style="margin-top: 150px;">
        <div class="card-header">
            <?= $title ?>
        </div>
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <form method="post" action="<?= base_url('customer/rental/tambah_aksi') ?>">
                    <div class="form-group">
                        <label for="">Harga Sewa / Hari</label>
                        <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil ?>">
                        <input type="text" class="form-control" name="harga" value="<?= $dt->harga ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Denda</label>
                        <input type="text" class="form-control" name="denda" value="<?= $dt->denda ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Rental</label>
                        <input type="date" class="form-control" name="tgl_rent">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali</label>
                        <input type="date" class="form-control" name="tgl_kem">
                    </div>

                    <button type="submit" class="btn btn-warning mb-2">Rental</button>
                </form>
            <?php endforeach ?>
        </div>
    </div>
</div>