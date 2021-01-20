<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <?= $this->session->flashdata('pesan') ?>
        <table class="table-responsive table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Mobil</th>
                <th>Tgl. Rental</th>
                <th>Tgl. Kembali</th>
                <th>Harga/ Hari</th>
                <th>Denda/ Hari</th>
                <th>Total Denda</th>
                <th>Tgl. Dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
                <th>Cek Pembayaran</th>
                <th>&nbsp;&nbsp;&nbsp;&nbsp;Aksi&nbsp;&nbsp;&nbsp;&nbsp;</th>
            </tr>
            <?php
            $no = 1;
            foreach ($transaksi as $trans) :
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $trans->n_cust ?></td>
                    <td><?= $trans->merk ?></td>
                    <td><?= date('d/m/Y', strtotime($trans->tgl_rent)) ?></td>
                    <td><?= date('d/m/Y', strtotime($trans->tgl_kem)) ?></td>
                    <td><?= number_format($trans->harga, 0, ',', '.') ?></td>
                    <td><?= number_format($trans->denda, 0, ',', '.') ?></td>
                    <td><?= number_format($trans->total_denda, 0, ',', '.') ?></td>
                    <td><?php if ($trans->tgl_peng == '0000-00-00') {
                            echo '-';
                        } else {
                            echo date('d/m/Y', strtotime($trans->tgl_peng));
                        } ?>
                    </td>
                    <td><?php if ($trans->status == '1') {
                            echo 'Kembali';
                        } else {
                            echo 'Belum Kembali';
                        } ?>
                    </td>
                    <td><?php if ($trans->status == '1') {
                            echo 'Kembali';
                        } else {
                            echo 'Belum Kembali';
                        } ?>
                    </td>
                    <td>
                        <center>
                            <?php if (empty($trans->bukti_pem)) { ?>
                                <button class="btn btn-danger"><i class="fas fa-times-circle" data-toggle="tooltip" title="Belum Dibayar"></i></button>
                            <?php } else { ?>
                                <a href="<?= base_url('admin/transaksi/pembayaran/' . $trans->id_rental) ?>" class="btn btn-success" data-toggle="tooltip" title="Sudah Dibayar"><i class="fas fa-check-circle"></i></a>
                            <?php } ?>
                        </center>
                    </td>
                    <td class="text-center">
                        <?php if ($trans->status == '1') {
                            echo '-';
                        } else { ?>
                            <div class="row">
                                <a href="<?= base_url('admin/transaksi/trans_selesai/' . $trans->id_rental) ?>" class="btn btn-success" data-toggle="tooltip" title="Transaksi Selesai"><i class="fas fa-check"></i></a>
                                <a href="<?= base_url('admin/transaksi/batal/' . $trans->id_rental) ?>" class="btn btn-danger ml-2" data-toggle="tooltip" title="Batal Transaksi"><i class="fas fa-times"></i></a>
                            </div>
                        <?php } ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </section>
</div>