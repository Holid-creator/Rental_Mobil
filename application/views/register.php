<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url('assets/asset_shop/') ?>/logo/logo1.png" alt="logo" width="100px" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="<?= base_url('register') ?>">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="n_cust">Nama</label>
                                            <input id="n_cust" type="text" class="form-control" name="n_cust" autofocus>
                                            <?= form_error('n_cust', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="username">Username</label>
                                            <input id="username" type="text" class="form-control" name="username">
                                            <?= form_error('username', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input id="alamat" type="text" class="form-control" name="alamat">
                                        <?= form_error('alamat', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="gender" class="d-block">Gender</label>
                                            <select name="gender" class="form-control">
                                                <option value="">-- Pilih Gender --</option>
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                            <?= form_error('gender', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="telp" class="d-block">No. Telepon</label>
                                            <input id="telp" type="text" class="form-control" name="telp">
                                            <?= form_error('telp', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="ktp" class="d-block">No. KTP</label>
                                            <input id="ktp" type="text" class="form-control" name="ktp">
                                            <?= form_error('ktp', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control" name="password">
                                            <?= form_error('password', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Sudah Punya Akun? <a href="<?= base_url('auth') ?>">Silahkan Login</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Abox 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>