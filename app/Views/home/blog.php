<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h2 class="pt-5 judul-blog">Blog</h2>
    <div class="row justify-content-around">
        <div class="col-md-9 pt-5">
            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/portfolio/iot.jpg" class="img-fluid rounded-start pt-4" alt="IOT">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="" class="text-decoration-none">
                                <h2 class="card-title">Desain IOT</h2>
                            </a>
                            <span>/ Blog, Prototype IOT / by CV. Mekar Cutting Digital</span>
                            <hr>
                            <p class="card-text pt-3 fs-5">Internet untuk Segala-(nya) (bahasa Inggris: Internet of
                                Things,
                                atau dikenal juga dengan singkatan IoT) merupakan sebuah konsep yang bertujuan untuk
                                memperluas manfaat dari konektivitas internet yang tersambung secara terus-menerus.[...]
                            </p>
                            <a href="" class="btn btn-dark text-white text-decoration-none text-capitalize">read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
            <article class="pt-3">
                <a href="" class="text-decoration-none">
                    <h2>Jasa Desain Pembuatan Aplikasi</h2>
                </a>
                <span>/ Blog, Digital Creative / by CV. Mekar Cutting Digital</span>
                <hr>
                <p class="pt-3 fs-5">Mencari Desain Pembuatan Aplikasi merupakan salah satu hal yang penting jika Anda
                    ingin
                    membuat atau sedang membangun suatu aplikasi untuk perusahaan. Mungkin sebagian dari Anda ragu untuk
                    memakai Jasa Desain Pembuatan Aplikasi. Padahal, Anda mewujudkan perusahaan sesuai dengan apa […]
                </p>
                <a href="" class="btn btn-dark text-white text-decoration-none text-capitalize">read
                    more</a>
            </article>
            <div class="card mb-3 border-0 pt-5">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/portfolio/portfolio.png" class="img-fluid rounded-start pt-4" alt="Portfolio">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="" class="text-decoration-none">
                                <h2 class="card-title">Pembuatan Aplikasi Web Portfolio</h2>
                            </a>
                            <span>/ Blog, Web Developer / by CV. Mekar Cutting Digital</span>
                            <hr>
                            <p class="card-text pt-3 fs-5">Wesbite portofolio adalah portofolio digital yang dapat
                                diakses melalui internet dengan tujuan untuk menunjukan karya dan bakat Anda.[...]
                            </p>
                            <a href="" class="btn btn-dark text-white text-decoration-none text-capitalize">read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="container">
                <hr class="line1">
                <span class="text-uppercase judul-aside">social</span>
                <br>
                <div class="social pb-3">
                    <div class="row pt-4 icon-aside">
                        <a href="#" class="nav-link"><i class="fa-brands fa-youtube-square"></i></a>
                        &nbsp;
                        <a class="nav-link" href="#"><i class="fa-brands fa-facebook-square"></i></a>
                        &nbsp;
                        <a class="nav-link" href="#"><i class="fa-brands fa-instagram-square"></i></a>
                        &nbsp;
                        <a class="nav-link" href="#"><i class="fa-brands fa-twitter-square"></i></a>
                    </div>
                </div>
                <hr class="line2">
                <span class="text-uppercase sub-aside">latest case studies</span>
                <article class="pt-3 sub-item1">
                    <a href="#" class="sub-header">
                        <h6 class="fw-bold">Pagar Besi</h6>
                    </a>
                    <a href="#" class="sub-item">
                        Pekerjaan Besi dan Alumunium
                    </a>
                    <hr>
                </article>
                <article class="sub-item2">
                    <a href="#" class="sub-header">
                        <h6 class="fw-bold">Kanopi</h6>
                    </a>
                    <a href="#" class="sub-item">
                        Pekerjaan Besi dan Alumunium
                    </a>
                    <hr>
                </article>
                <article class="sub-item3">
                    <a href="#" class="sub-header">
                        <h6 class="fw-bold">Prototype IOT</h6>
                    </a>
                    <a href="#" class="sub-item">
                        Prototype IOT & Digital Creative
                    </a>
                    <hr>
                </article>
                <article class="sub-item4">
                    <a href="#" class="sub-header">
                        <h6 class="fw-bold">Food App Dekstop</h6>
                    </a>
                    <a href="#" class="sub-item">
                        Digital Creative
                    </a>
                    <hr>
                </article>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>