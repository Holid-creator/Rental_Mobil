<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
    </section>
    <form method="post" action="<?= base_url('admin/laporan') ?>">
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
    <hr>

    <div class="btn-group">
        <a class="btn btn-success btn-sm" target="_blank" href="<?= base_url() . 'admin/laporan/print_lap/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>"><i class="fas fa-print mr-1"></i>Print</a>
    </div>

    <table class="table-responsive table table-bordered table-striped mt-3">
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
        </tr>
        <?php
        $no = 1;
        foreach ($laporan as $lap) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $lap->n_cust ?></td>
                <td><?= $lap->merk ?></td>
                <td><?= date('d/m/Y', strtotime($lap->tgl_rent)) ?></td>
                <td><?= date('d/m/Y', strtotime($lap->tgl_kem)) ?></td>
                <td><?= number_format($lap->harga, 0, ',', '.') ?></td>
                <td><?= number_format($lap->denda, 0, ',', '.') ?></td>
                <td><?= number_format($lap->total_denda, 0, ',', '.') ?></td>
                <td><?php if ($lap->tgl_peng == '0000-00-00') {
                        echo '-';
                    } else {
                        echo date('d/m/Y', strtotime($lap->tgl_peng));
                    } ?>
                </td>
                <td><?= $lap->st_peng ?></td>
                <td><?= $lap->st_rent ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</div>