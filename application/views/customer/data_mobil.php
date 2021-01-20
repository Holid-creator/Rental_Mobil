<section id="page-title-area" class="section-padding-overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Our Cars</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, iure beatae ipsum exercitationem est doloremque magnam repellendus autem quidem minus.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="car-list-area" class="section-padding">
    <div class="container">
        <?= $this->session->flashdata('pesan') ?>
        <div class="row">
            <?php foreach ($mobil as $mb) : ?>
                <div class="col-lg-6 col-md-6">
                    <div class="single-car-wrap">
                        <img src="<?= base_url('assets/upload/' . $mb->gambar) ?>" alt="">
                        <div class="car-list-info without-bar">
                            <h2><a href=""><?= $mb->merk  ?></a></h2>
                            <h5>Rp. <?= number_format($mb->harga, 0, ',', '.') ?> / Hari</h5>
                            <ul class="car-info-list">
                                <li><?php if ($mb->ac == '1') {
                                        echo '<i class="fa fa-check-square text-success mr-2"></i>';
                                    } else {
                                        echo '<i class="fa fa-times-circle text-danger mr-2"></i>';
                                    } ?>AC
                                </li>
                                <li><?php if ($mb->supir == '1') {
                                        echo '<i class="fa fa-check-square text-success mr-2"></i>';
                                    } else {
                                        echo '<i class="fa fa-times-circle text-danger mr-2"></i>';
                                    } ?>Supir
                                </li>
                                <li><?php if ($mb->mp3_player == '1') {
                                        echo '<i class="fa fa-check-square text-success mr-2"></i>';
                                    } else {
                                        echo '<i class="fa fa-times-circle text-danger mr-2"></i>';
                                    } ?>Mp3 Player
                                </li>
                                <li><?php if ($mb->central_lock == '1') {
                                        echo '<i class="fa fa-check-square text-success mr-2"></i>';
                                    } else {
                                        echo '<i class="fa fa-times-circle text-danger mr-2"></i>';
                                    } ?>Central Lock
                                </li>
                            </ul>
                            <p class="rating">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star unmark"></i>
                            </p>
                            <?php if ($mb->status == '1') {
                                echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, '<span class="rent-btn-success">Rental</span>');
                            } else {
                                echo '<span class="rent-btn-danger">Tidak Tersedia</span>';
                            } ?>
                            <a href="<?= base_url('customer/data_mobil/detail_mobil/' . $mb->id_mobil) ?>" class="rent-btn">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>