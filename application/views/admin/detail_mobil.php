<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
    </section>
    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url() . 'assets/upload/' . $dt->gambar ?>" width="430px">
                    </div>
                    <div class="col-md-5">
                        <table class="table table-hover">
                            <tr>
                                <td>Type Mobil</td>
                                <td>
                                    <?php if ($dt->k_tipe == 'SDN') {
                                        echo 'Sedan';
                                    } elseif ($dt->k_tipe == 'HTB') {
                                        echo 'Hatchback';
                                    } elseif ($dt->k_tipe == 'MPV') {
                                        echo 'Multi Purpose Vehicle';
                                    } elseif ($dt->k_tipe == 'HND') {
                                        echo 'Honda';
                                    } elseif ($dt->k_tipe == 'BMW') {
                                        echo 'Bayerische Motoren Werke';
                                    } else {
                                        echo '<span class="text-danger">Type Mobil Belum Terdaftar</span>';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?= $dt->merk ?><dt>
                            </tr>
                            <tr>
                                <td>No. Plat</td>
                                <td><?= $dt->plat ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?= $dt->warna ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?= $dt->thn ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?= number_format($dt->harga, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Denda</td>
                                <td>Rp. <?= number_format($dt->denda, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td><?php if ($dt->status == '0') {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>AC</td>
                                <td><?php if ($dt->ac == '0') {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Supir</td>
                                <td><?php if ($dt->supir == '0') {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Mp3 Player</td>
                                <td><?php if ($dt->mp3_player == '0') {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Central Lock</td>
                                <td><?php if ($dt->central_lock == '0') {
                                        echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                    } else {
                                        echo '<span class="badge badge-success">Tersedia</span>';
                                    } ?>
                                </td>
                            </tr>
                        </table>
                        <a href="<?= base_url('admin/data_mobil') ?>" class="btn btn-sm btn-warning ml-4">Kembali</a>
                        <a href="<?= base_url('admin/data_mobil/update/') . $dt->id_mobil ?>" class="btn btn-sm btn-primary">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>