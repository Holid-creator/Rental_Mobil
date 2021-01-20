<table style="width: 70%;">
    <legend>
        <center>
            <h2>Invoice Pembayaran Anda</h2>
        </center>
    </legend>
    <?php foreach ($transaksi as $trans) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?= $trans->n_cust ?></td>
        </tr>
        <tr>
            <td>Merk Mobil</td>
            <td>:</td>
            <td><?= $trans->merk ?></td>
        </tr>
        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?= date('d F Y', strtotime($trans->tgl_rent)) ?></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?= date('d F Y', strtotime($trans->tgl_kem)) ?></td>
        </tr>
        <tr>
            <td>Biaya Sewa/ hari</td>
            <td>:</td>
            <td>Rp. <?= number_format($trans->harga, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <?php
            $x = strtotime($trans->tgl_kem);
            $z = strtotime($trans->tgl_rent);
            $jml = abs(($x - $z) / (60 * 60 * 24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?= $jml ?> Hari</td>
        </tr>
        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td><?php if ($trans->st_pem == '0') {
                    echo 'Belum Lunas';
                } else {
                    echo 'Lunas';
                }
                ?>
            </td>
        </tr>
        <tr style="font-weight: bold; color:orange">
            <td> Jumlah Pembayaran</td>
            <td>:</td>
            <td><b class="text-success">Rp. <?= number_format($trans->harga * $jml, 0, ',', '.') ?></b></td>
        </tr>
        <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <li>Bank Mandiri 123456789</li>
                    <li>Bank BCA 987654321</li>
                    <li>Bank BNI 012345698</li>
                </ul>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<script>
    window.print();
</script>