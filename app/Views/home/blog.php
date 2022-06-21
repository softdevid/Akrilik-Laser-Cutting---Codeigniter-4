<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h2 class="pt-5 judul-blog">Blog</h2>
    <div class="row justify-content-around">
        <div class="col-md-9"></div>
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