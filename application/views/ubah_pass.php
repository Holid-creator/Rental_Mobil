<body>
    <div id="app">
        <section class="section">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?= base_url('assets/asset_shop') ?>/logo/logo1.png" alt="logo" width="100" class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4><?= $title ?></h4>
                            </div>
                            <span class="mr-2 ml-2"> <?= $this->session->flashdata('pesan') ?></span>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth/aksi') ?>">
                                    <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="password" class="form-control" name="passb" placeholder="Masukkan Password Baru Anda" autofocus>
                                        <?= form_error('passb', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="passc" placeholder="Confirmasi Password Anda" autofocus>
                                        <?= form_error('passc', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Ganti Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>