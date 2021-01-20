<div class="main-content">
    <section class="section">
        <div class="section-header mb-2" style="margin-top: 200px;">
            <center>
                <h1><?= $title ?></h1>
            </center>
        </div>
    </section>
    <?php foreach ($detail as $dt) : ?>
        <div class="container mb-3">
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
                                    <td>Status</td>
                                    <td><?php if ($dt->status == '0') {
                                            echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                                        } else {
                                            echo '<span class="badge badge-success">Tersedia</span>';
                                        } ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>