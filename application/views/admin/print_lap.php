<div style="margin-right: 20px; margin-left: 20px;">
    <h3 class="text-center mt-5">Laporan Transaksi Rental Mobil</h3>
    <table class="mb-4" width="30%">
        <tr>
            <td>Dari Tanggal</td>
            <td>:</td>
            <td><?= date('d M Y', strtotime($_GET['dari'])) ?></td>
        </tr>
        <tr>
            <td>Sampai Tanggal</td>
            <td>:</td>
            <td><?= date('d M Y', strtotime($_GET['sampai'])) ?></td>
        </tr>
    </table>
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

<script>
    window.print();
</script>