<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <a href="<?= base_url('admin/data_mobil/tambah') ?>" class="btn btn-primary mb-2"><i class="fas fa-plus-circle mr-1"></i>Tambah Data</a>
        <?= $this->session->flashdata('pesan') ?>
        <table class="table wy-table-bordered table-hover wy-table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merek</th>
                    <th>No. Plat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mobil as $mb) :
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><img src="<?= base_url() . 'assets/upload/' . $mb->gambar ?>" width="100px"></td>
                        <td><?= $mb->k_tipe ?></td>
                        <td><?= $mb->merk ?></td>
                        <td><?= $mb->plat ?></td>
                        <td><?php
                            if ($mb->status == '0') {
                                echo '<span class="badge badge-danger">Tidak Tersedia</span>';
                            } else {
                                echo '<span class="badge badge-success">Tersedia</span>';
                            }
                            ?></td>
                        <td>
                            <a href="<?= base_url('admin/data_mobil/detail/') . $mb->id_mobil ?>" class="btn btn-info" data-toggle="tooltip" title="Detail"><i class="fas fa-eye"></i></a>
                            <a href="<?= base_url('admin/data_mobil/update/') . $mb->id_mobil ?>" class="btn btn-primary" title="Ubah" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('admin/data_mobil/hapus/') . $mb->id_mobil ?>" class="btn btn-danger" title="Hapus" data-toggle="tooltip"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
</div>