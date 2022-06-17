<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<<<<<<< HEAD
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
=======
<section id="intro">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/img/carousel/1.jpg" class="d-block w-100 image" alt="..." style="max-height: 46rem;">
                <div class="carousel-caption d-none d-md-block text-white" style="margin-bottom: 20rem;">
                    <h5>First slide label</h5>
                    <p cl>Some representative placeholder content for the first slide.</p>
                    <a href="#<?= $title; ?>" class="btn btn-success">Get Started</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/img/carousel/2.jpg" class="d-block w-100 image" alt="..." style="max-height: 46rem;">
                <div class="carousel-caption d-none d-md-block text-white" style="margin-bottom: 20rem;">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                    <a href="#<?= $title; ?>" class="btn btn-success">Get Started</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/img/carousel/3.jpg" class="d-block w-100 image" alt="..." style="max-height: 46rem;">
                <div class="carousel-caption d-none d-md-block text-white" style="margin-bottom: 20rem;">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                    <a href="#<?= $title; ?>" class="btn btn-success">Get Started</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon icon-left" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon icon-next" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
>>>>>>> 4c4828f608c40bcfb460437bdc0dfcbc1873584d
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div id="gambar-carousel">
                <img src="/img/carousel/1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div id="gambar-carousel">
                <img src="/img/carousel/2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div id="gambar-carousel">
                <img src="/img/carousel/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?= $this->endSection(); ?>