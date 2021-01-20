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
                                <h4>Login</h4>
                            </div>
                            <span class="mr-2 ml-2"> <?= $this->session->flashdata('pesan') ?></span>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth/form_login') ?>">
                                    <div class="form-group">
                                        <label for="username">Usernama</label>
                                        <input id="username" type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autofocus>
                                        <?= form_error('username', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control" name="password" id="password" placeholder="password">
                                        <?= form_error('password', '<div class="text-danger text-small ml-2">', '</div>') ?>
                                        <input type="checkbox" id="checkbox" class="mr-2 mt-2">Show Password
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Login
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Belum Punya Akun? <a href="<?= base_url('register') ?>">Silahkan Register Terlebih Dahulu</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>