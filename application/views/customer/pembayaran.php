<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: 90px;">
                <div class="card-header bg-warning" style="height: 70px;">
                    <h5 class="mt-2 text-center">Invoice Pembayaran Anda</h5>
                </div>
                <div class="card-body">
                    <table class="table mt-3">
                        <?php foreach ($transaksi as $trans) : ?>
                            <tr>
                                <th>Merk Mobil</th>
                                <td>:</td>
                                <td><?= $trans->merk ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?= date('d F Y', strtotime($trans->tgl_rent)) ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?= date('d F Y', strtotime($trans->tgl_kem)) ?></td>
                            </tr>
                            <tr>
                                <th>Biaya Sewa/ hari</th>
                                <td>:</td>
                                <td>Rp. <?= number_format($trans->harga, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <?php
                                $x = strtotime($trans->tgl_kem);
                                $z = strtotime($trans->tgl_rent);
                                $jml = abs(($x - $z) / (60 * 60 * 24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>
                                <td><?= $jml ?> Hari</td>
                            </tr>
                            <tr>
                                <th class="text-success">Jumlah Pembayaran</th>
                                <td>:</td>
                                <td><b class="text-success">Rp. <?= number_format($trans->harga * $jml, 0, ',', '.') ?></b></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                                <td><a href="<?= base_url('customer/transaksi/cetak_invoice/' . $trans->id_rental) ?>" class="btn btn-warning btn-sm">Print Invoice</a></td>
                            </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top: 90px;">
                <div class="card-header bg-info" style="height: 70px;">
                    <h5 class="mt-2 text-center">Informasi Pembayaran</h5>
                </div>
                <div class="card-body">
                    <p>Silahkan Melakukan Pembayaran Melalui Nomor Rekening Dibawah ini.</p>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item">Bank Mandiri 123456789</li>
                        <li class="list-group-item">Bank BCA 987654321</li>
                        <li class="list-group-item">Bank BNI 012345698</li>
                    </ul>
                    <?php if (empty($trans->bukti_pem)) { ?>
                        <!-- Button trigger modal -->
                        <a href="#" type="button" class="btn btn-info btn-sm mt-3" style="width: 100%;" data-toggle="modal" data-target="#exampleModal">
                            Upload Bukti Pembayaran
                        </a>
                    <?php } else if ($trans->st_pem == '0') { ?>
                        <button class="btn btn-secondary btn-sm mt-3" style="width: 100%;"><i class="fa fa-clock-o mr-1"></i>Menunggu Konfarmasi</button>
                    <?php } else if ($trans->st_pem == '1') { ?>
                        <button class="btn btn-success btn-sm mt-3" style="width: 100%;"><i class="fa fa-check mr-1"></i>Pembayaran Selesai</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('customer/transaksi/pem_aksi') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id_rental" value="<?= $trans->id_rental ?>">
                        <label for="">Upload Bukti Pembayaran</label>
                        <input type="file" name="bukti_pem" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>