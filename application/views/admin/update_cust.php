<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?= $title ?></h1>
        </div>
        <div class="card">
            <div class="card-body">
                <?php foreach ($customer as $cs) : ?>
                    <form method="post" action="<?= base_url('admin/customer/update_aksi') ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="hidden" name="id_cust" value="<?= $cs->id_cust ?>">
                                    <input type="text" name="n_cust" class="form-control" value="<?= $cs->n_cust ?>">
                                    <?= form_error('n_cust', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" class="form-control" value="<?= $cs->username ?>">
                                    <?= form_error('username', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="<?= $cs->alamat ?>">
                                    <?= form_error('alamat', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="<?= $cs->gender ?>"><?= $cs->gender ?></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <?= form_error('gender', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No. Telepon</label>
                                    <input type="text" name="telp" class="form-control" value="<?= $cs->telp ?>">
                                    <?= form_error('telp', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                                </div>
                                <div class=" form-group">
                                    <label for="">No. KTP</label>
                                    <input type="text" name="ktp" class="form-control" value="<?= $cs->ktp ?>">
                                    <?= form_error('ktp', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" value="<?= $cs->password ?>">
                                    <?= form_error('password', '<div class="text-danger wy-text-small ml-2">', '</div>') ?>
                                </div>
                                <button type="submit" class="btn btn-success mt-4">Simpan</button>
                                <button type="reset" class="btn btn-danger mt-4">Reset</button>
                                <a href="<?= base_url('admin/customer') ?>" class=" btn btn-warning mt-4">Kembali</a>
                            </div>
                        </div>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</div>