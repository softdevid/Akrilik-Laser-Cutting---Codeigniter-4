<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="background-portfolio">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active button" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-timbul-tab" data-bs-toggle="pill" data-bs-target="#pills-timbul" type="button" role="tab" aria-controls="pills-timbul" aria-selected="false">Huruf Timbul</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-neonbox-tab" data-bs-toggle="pill" data-bs-target="#pills-neonbox" type="button" role="tab" aria-controls="pills-neonbox" aria-selected="false">Neonbox</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-reklame-tab" data-bs-toggle="pill" data-bs-target="#pills-reklame" type="button" role="tab" aria-controls="pills-reklame" aria-selected="false">Project
                    Reklame</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-digitalcreative-tab" data-bs-toggle="pill" data-bs-target="#pills-digitalcreative" type="button" role="tab" aria-controls="pills-digitalcreative" aria-selected="false">Digital Creative</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-iot-tab" data-bs-toggle="pill" data-bs-target="#pills-iot" type="button" role="tab" aria-controls="pills-iot" aria-selected="false">Prototype IOT</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($portfolio as $key => $value) { ?>
                        <div class="col">
                            <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down" data-aos-duration="1000">
                                <a href="/portfolio/<?= $value['slug'] ?>" class="text-white">
                                    <img src="/img/portfolio/<?= $value['gambar'] ?>" id="gambar" class="card-img" alt="Portfolio">
                                    <div class="overlay-content card-img-overlay text-bottom">
                                        <h5><?= $value['judul_produk'] ?></h5>
                                        <span>
                                            <?php if ($value['jenis_produk'] == 1) {
                                                echo 'Huruf Timbul';
                                            } elseif ($value['jenis_produk'] == 2) {
                                                echo 'Neon Box';
                                            } elseif ($value['jenis_produk'] == 3) {
                                                echo 'Papan Reklame';
                                            } else {
                                                echo 'Digital Creative';
                                            } ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-timbul" role="tabpanel" aria-labelledby="pills-timbul-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($portfolio as $key => $value) {
                        if ($value['jenis_produk'] == 1) { ?>
                            <div class="col">
                                <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down" data-aos-duration="1000">
                                    <a href="#" class="text-white">
                                        <img src="/img/portfolio/<?= $value['gambar'] ?>" id="gambar" class="card-img" alt="Huruf Timbul">
                                        <div class="overlay-content card-img-overlay text-bottom">
                                            <h5><?= $value['judul_produk'] ?></h5>
                                            <span>
                                                <?php if ($value['jenis_produk'] == 1) {
                                                    echo 'Huruf Timbul';
                                                } ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-neonbox" role="tabpanel" aria-labelledby="pills-neonbox-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($portfolio as $key => $value) {
                        if ($value['jenis_produk'] == 2) { ?>
                            <div class="col">
                                <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down" data-aos-duration="1000">
                                    <a href="#" class="text-white">
                                        <img src="/img/portfolio/<?= $value['gambar'] ?>" id="gambar" class="card-img" alt="Huruf Timbul">
                                        <div class="overlay-content card-img-overlay text-bottom">
                                            <h5><?= $value['judul_produk'] ?></h5>
                                            <span>
                                                <?php if ($value['jenis_produk'] == 2) {
                                                    echo 'Neon Box';
                                                } ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-reklame" role="tabpanel" aria-labelledby="pills-reklame-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($portfolio as $key => $value) {
                        if ($value['jenis_produk'] == 3) { ?>
                            <div class="col">
                                <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down" data-aos-duration="1000">
                                    <a href="#" class="text-white">
                                        <img src="/img/portfolio/<?= $value['gambar'] ?>" id="gambar" class="card-img" alt="Huruf Timbul">
                                        <div class="overlay-content card-img-overlay text-bottom">
                                            <h5><?= $value['judul_produk'] ?></h5>
                                            <span>
                                                <?php if ($value['jenis_produk'] == 3) {
                                                    echo 'Papan Reklame';
                                                } ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-digitalcreative" role="tabpanel" aria-labelledby="pills-digitalcreative-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($portfolio as $key => $value) {
                        if ($value['jenis_produk'] == 4) { ?>
                            <div class="col">
                                <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down" data-aos-duration="1000">
                                    <a href="#" class="text-white">
                                        <img src="/img/portfolio/<?= $value['gambar'] ?>" id="gambar" class="card-img" alt="Huruf Timbul">
                                        <div class="overlay-content card-img-overlay text-bottom">
                                            <h5><?= $value['judul_produk'] ?></h5>
                                            <span>
                                                <?php if ($value['jenis_produk'] == 4) {
                                                    echo 'Digital Creative';
                                                } ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-iot" role="tabpanel" aria-labelledby="pills-iot-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($portfolio as $key => $value) {
                        if ($value['jenis_produk'] == 5) { ?>
                            <div class="col">
                                <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down" data-aos-duration="1000">
                                    <a href="#" class="text-white">
                                        <img src="/img/portfolio/<?= $value['gambar'] ?>" id="gambar" class="card-img" alt="Internet of Think">
                                        <div class="overlay-content card-img-overlay text-bottom">
                                            <h5><?= $value['judul_produk'] ?></h5>
                                            <span>
                                                <?php if ($value['jenis_produk'] == 5) {
                                                    echo 'Internet of Think';
                                                } ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>