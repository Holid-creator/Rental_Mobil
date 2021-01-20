<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
    </section>
    <a href="<?= base_url('admin/data_tipe/tambah') ?>" class="btn btn-success mb-2"><i class="fas fa-plus-circle mr-1"></i>Tambah Type</a>
    <?= $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">No.</th>
                <th>Kode Type</th>
                <th>Nama Type</th>
                <th width="150px">Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($tipe as $tp) :
            ?>
        <tbody>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $tp->k_tipe ?></td>
                <td><?= $tp->n_tipe ?></td>
                <td>
                    <a href="<?= base_url('admin/data_tipe/update/') . $tp->id_tipe ?>" class="btn btn-primary" title="Ubah" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Apakah Anda Ingin Menghapusnya')" href="<?= base_url('admin/data_tipe/hapus/') . $tp->id_tipe ?>" class="btn btn-danger" title="Hapus" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    <?php endforeach ?>
    </thead>
    </table>