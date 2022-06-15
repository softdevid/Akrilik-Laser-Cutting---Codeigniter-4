<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="background-portfolio">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                    type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-timbul-tab" data-bs-toggle="pill" data-bs-target="#pills-timbul"
                    type="button" role="tab" aria-controls="pills-timbul" aria-selected="false">Huruf Timbul</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-neonbox-tab" data-bs-toggle="pill" data-bs-target="#pills-neonbox"
                    type="button" role="tab" aria-controls="pills-neonbox" aria-selected="false">Neonbox</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-reklame-tab" data-bs-toggle="pill" data-bs-target="#pills-reklame"
                    type="button" role="tab" aria-controls="pills-reklame" aria-selected="false">Project
                    Reklame</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-besi-tab" data-bs-toggle="pill" data-bs-target="#pills-besi"
                    type="button" role="tab" aria-controls="pills-besi" aria-selected="false">Pekerjaan Besi dan
                    Aluminium</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web"
                    type="button" role="tab" aria-controls="pills-web" aria-selected="false">Web Development</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover border-0">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio.png" class="card-img" alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Website Development</h5>
                                    <span>Digital Creative, Website Development</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover border-0">
                            <a href="#" class="text-white">
                                <img src="/img/kanopi.jpg" class="card-img" alt="Kanopi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Kanopi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover border-0">
                            <a href="#" class="text-white">
                                <img src="/img/pagarbesi.jpg" class="card-img" alt="Pagar Besi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Pagar Besi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-timbul" role="tabpanel" aria-labelledby="pills-timbul-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-neonbox" role="tabpanel" aria-labelledby="pills-neonbox-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-reklame" role="tabpanel" aria-labelledby="pills-reklame-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-besi" role="tabpanel" aria-labelledby="pills-besi-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover border-0">
                            <a href="#" class="text-white">
                                <img src="/img/kanopi.jpg" class="card-img" alt="Kanopi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Kanopi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover border-0">
                            <a href="#" class="text-white">
                                <img src="/img/pagarbesi.jpg" class="card-img" alt="Pagar Besi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Pagar Besi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover border-0">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio.png" class="card-img" alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Website Development</h5>
                                    <span>Digital Creative, Website Development</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>