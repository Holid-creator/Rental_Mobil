<div class="container">
    <div class="card mx-auto" style="margin-top: 180px; width: 80%;">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <span class="mt-2 p-2"><?= $this->session->flashdata('pesan') ?></span>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Customer</th>
                    <th>Merk Mobil</th>
                    <th>No. Plat</th>
                    <th>Harga Sewa</th>
                    <th>Aksi</th>
                    <th>Batal</th>
                </tr>
                <?php
                $no = 1;
                foreach ($transaksi as $trans) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $trans->n_cust ?></td>
                        <td><?= $trans->merk ?></td>
                        <td><?= $trans->plat ?></td>
                        <td>Rp. <?= number_format($trans->harga, 0, ',', '.') ?></td>
                        <td><?php if ($trans->st_rent == 'Selesai') { ?>
                                <button class="btn btn-success btn-sm">Rental Selesai</button>
                            <?php } else { ?>
                                <a href="<?= base_url('customer/transaksi/pembayaran/' . $trans->id_rental) ?>" class="btn btn-warning btn-sm">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($trans->st_rent == 'Belum Selesai') { ?>
                                <a onclick="return confirm('Yakin Anda ingin Membatalkannya ?')" href="<?= base_url('customer/transaksi/batal_trans/' . $trans->id_rental) ?>" class="btn btn-danger btn-sm">Batal</a>
                            <?php } else { ?>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                                    batal
                                </button>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">informasi Batal Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Maaf Transaksi ini Sudah selesai Tidak Bisa Dibatalkan
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>