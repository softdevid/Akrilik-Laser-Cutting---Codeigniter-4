<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="tab-pane fade show active mt-5" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col" data-aos="fade-down" data-aos-duration="1000">
                <div class="h-100 border-0">
                    <img src="/img/services/web.jpg" class="card-img-top" id="gambar" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Dedy Suwito, S.Kom</h5>
                        <button class="btn btn-dark mt-3" id="button" type="button" data-bs-toggle="offcanvas" data-bs-target="#dedy" aria-controls="offcanvasRight">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                <div class="h-100 border-0">
                    <img src="/img/services/3.png" class="card-img-top" id="gambar" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Ardianto Putra Pratomo</h5>
                        <button class="btn btn-dark mt-3" id="button" type="button" data-bs-toggle="offcanvas" data-bs-target="#ardianto" aria-controls="offcanvasRight">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
                <div class="h-100 border-0">
                    <img src="/img/services/neonbox.jpg" class="card-img-top" id="gambar" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Dzaky Fadli Firmansyah</h5>
                        <button class="btn btn-dark mt-3" id="button" type="button" data-bs-toggle="offcanvas" data-bs-target="#dzaky" aria-controls="offcanvasRight">Learn More</button>
                    </div>
                </div>
            </div>
            <div class="col" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
                <div class="h-100 border-0">
                    <img src="/img/services/neonbox.jpg" class="card-img-top" id="gambar" alt="...">
                    <div class="card-body mt-3">
                        <h5 class="card-title">Tresnanda Agsifa Cakra Buana</h5>
                        <button class="btn btn-dark mt-3" id="button" type="button" data-bs-toggle="offcanvas" data-bs-target="#tresnanda" aria-controls="offcanvasRight">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- offcanvas modal -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="dedy" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="ardianto" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="dzaky" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="tresnanda" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            ...
        </div>
    </div>

</div>
<!-- offcanvas modal -->

<?= $this->endSection(); ?>