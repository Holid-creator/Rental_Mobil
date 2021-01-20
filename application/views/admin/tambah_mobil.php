<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="card">
            <div class="card-body">
                <form method="post" action="<?= base_url('admin/data_mobil/aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Type Mobil</label>
                                <select name="k_tipe" class="form-control">
                                    <option value="">-- Pilih type Mobil --</option>
                                    <?php foreach ($tipe as $tp) : ?>
                                        <option value="<?= $tp->k_tipe ?>"><?= $tp->n_tipe ?></option>
                                    <?php endforeach ?>
                                </select>
                                <?= form_error('k_tipe', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Merk</label>
                                <input type="text" name="merk" class="form-control" placeholder="Masukkan Merk Mobil">
                                <?= form_error('merk', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">No. Plat</label>
                                <input type="text" name="plat" class="form-control" placeholder="Masukkan Plat Mobil">
                                <?= form_error('plat', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" class="form-control" placeholder="Masukkan Warna Mobil">
                                <?= form_error('warna', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">AC</label>
                                <select name="ac" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('ac', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Supir</label>
                                <select name="supir" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('supir', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">MP3 Player</label>
                                <select name="mp3_player" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('mp3_player', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Central Lock</label>
                                <select name="central_lock" class="form-control">
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('central_lock', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Harga Sewa</label>
                                <input type="number" name="harga" class="form-control" placeholder="Masukkan Harga sewa">
                                <?= form_error('harga', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Denda</label>
                                <input type="number" name="denda" class="form-control" placeholder="Masukkan Harga Denda">
                                <?= form_error('denda', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="thn" class="form-control" placeholder="Masukkan Tahun">
                                <?= form_error('thn', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?= form_error('status', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                            <a href="<?= base_url('admin/data_mobil') ?>" class=" btn btn-warning mt-4">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
</section>
</div>