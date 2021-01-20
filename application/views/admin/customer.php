<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
    </section>
    <a href="<?= base_url('admin/customer/tambah') ?>" class="btn btn-primary mb-2"><i class="fas fa-plus-circle mr-1"></i>Tambah Data</a>
    <?= $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-hover table-striped table-responsive">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>No. Telepon</th>
            <th>No. KTP</th>
            <!-- <th>Password</th> -->
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($customer as $cs) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $cs->n_cust ?></td>
                <td><?= $cs->username ?></td>
                <td><?= $cs->alamat ?></td>
                <td><?= $cs->gender ?></td>
                <td><?= $cs->telp ?></td>
                <td><?= $cs->ktp ?></td>
                <!-- <td><?= $cs->password ?></td> -->
                <td>
                    <div class="row">
                        <a href="<?= base_url('admin/customer/update/') . $cs->id_cust ?>" class="btn btn-primary mr-1" title="Ubah" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Yankin Anda Ingin Menghapusnya')" href="<?= base_url('admin/customer/hapus/') . $cs->id_cust ?>" class="btn btn-danger" title="Hapus" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>