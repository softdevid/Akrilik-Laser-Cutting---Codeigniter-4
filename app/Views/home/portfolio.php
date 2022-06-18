<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="background-portfolio">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active button" id="pills-all-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                    aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-timbul-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-timbul" type="button" role="tab" aria-controls="pills-timbul"
                    aria-selected="false">Huruf Timbul</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-neonbox-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-neonbox" type="button" role="tab" aria-controls="pills-neonbox"
                    aria-selected="false">Neonbox</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-reklame-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-reklame" type="button" role="tab" aria-controls="pills-reklame"
                    aria-selected="false">Project
                    Reklame</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-besi-tab" data-bs-toggle="pill" data-bs-target="#pills-besi"
                    type="button" role="tab" aria-controls="pills-besi" aria-selected="false">Pekerjaan Besi dan
                    Aluminium</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web"
                    type="button" role="tab" aria-controls="pills-web" aria-selected="false">Web Development</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link button" id="pills-creative-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-creative" type="button" role="tab" aria-controls="pills-creative"
                    aria-selected="false">Digital
                    Creative</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/portfolio.png" id="gambar" class="card-img" alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Website Development Portfolio</h5>
                                    <span>Digital Creative, Website Development</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover2 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="100">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/kanopi.jpg" id="gambar" class="card-img" alt="Kanopi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Kanopi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover3 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="150">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/pagarbesi.jpg" id="gambar" class="card-img" alt="Pagar Besi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Pagar Besi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="200">
                            <a href="#" class="text-white">
                                <img src="/img/services/3.png" id="gambar" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Foto Bali</h5>
                                    <span>Huruf Timbul</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover5 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="250">
                            <a href="#" class="text-white">
                                <img src="/img/services/neonbox.jpg" id="gambar" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Neonbox</h5>
                                    <span>Neonbox</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover6 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="300">
                            <a href="#" class="text-white">
                                <img src="/img/services/reklame.jpg" id="gambar" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Papan Reklame (Billboard)</h5>
                                    <span>Project Reklame</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover7 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="350">
                            <a href="#" class="text-white">
                                <img src="/img/services/dekstop.jpg" id="gambar" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Food App Desktop Application</h5>
                                    <span>Digital Creative</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-timbul" role="tabpanel" aria-labelledby="pills-timbul-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover4 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/services/3.png" id="gambar" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Foto Bali</h5>
                                    <span>Huruf Timbul</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-neonbox" role="tabpanel" aria-labelledby="pills-neonbox-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover5 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/services/neonbox.jpg" id="gambar" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Neonbox</h5>
                                    <span>Neonbox</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-reklame" role="tabpanel" aria-labelledby="pills-reklame-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover6 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/services/reklame.jpg" id="gambar" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Papan Reklame (Billboard)</h5>
                                    <span>Project Reklame</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-besi" role="tabpanel" aria-labelledby="pills-besi-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover2 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/kanopi.jpg" id="gambar" class="card-img" alt="Kanopi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Kanopi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover3 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="100">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/pagarbesi.jpg" id="gambar" class="card-img" alt="Pagar Besi">
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
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/portfolio.png" id="gambar" class="card-img" alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Website Development Portfolio</h5>
                                    <span>Digital Creative, Website Development</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-creative" role="tabpanel" aria-labelledby="pills-creative-tab"
                tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover1 border-0" data-aos="fade-down"
                            data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/portfolio.png" id="gambar" class="card-img" alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Website Development Portfolio</h5>
                                    <span>Digital Creative, Website Development</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover7 border-0" data-aos="fade-down"
                            data-aos-duration="1000" data-aos-delay="100">
                            <a href="#" class="text-white">
                                <img src="/img/services/dekstop.jpg" id="gambar" class="card-img" alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Food App Application</h5>
                                    <span>Digital Creative</span>
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