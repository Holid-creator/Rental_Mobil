<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h2><?= $title ?></h2>
        </div>
        <center class="card" style="width: 55%;">
            <div class="card-body">
                <form method="post" action="<?= base_url('admin/transaksi/cek_pem') ?>">
                    <?php foreach ($pembayaran as $pem) : ?>
                        <a href="<?= base_url('admin/transaksi/download_pem/' . $pem->id_rental) ?>" class="btn btn-success"><i class="fas fa-download mr-1"></i>Download Bukti Pembayaran</a>
                        <div class="custom-control custom-switch ml-5">
                            <input type="hidden" name="id_rental" value="<?= $pem->id_rental ?>">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="st_pem">
                            <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>Simpan</button>
                    <?php endforeach ?>
                </form>
            </div>
        </center>
    </section>
</div>