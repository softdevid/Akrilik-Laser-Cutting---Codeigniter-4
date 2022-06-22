<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>
<div class="container">
    <h1 class="py-5"><?= $title ?></h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($services as $key => $value) {
            if ($value['jenis_service'] == 2) { ?>
                <div class="col" data-aos="fade-down" data-aos-duration="1000">
                    <div class="h-100 border-0">
                        <img src="/img/services/<?= $value['gambar'] ?>" class="card-img-top" id="gambar" alt="...">
                        <div class="card-body mt-3">
                            <h5 class="card-title"><?= $value['judul_service'] ?></h5>
                            <p class="card-text"><?= $value['kutipan'] ?></p>
                            <a href="/services/<?= $value['slug'] ?>" class="btn btn-dark" id="button">Learn More</a>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</div>
<?= $this->endSection('content') ?>