<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div id="carousel-gambar">
                <img src="/img/carousel/1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div id="carousel-gambar">
                <img src="/img/carousel/2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="carousel-item">
            <div id="carousel-gambar">
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

<div class="container py-5">
    <article>
        <div id="judul">
            <h1>Prologue</h1>
            <p>Little bit about us</p>
        </div>
        <div class="py-5">
            <b>Mekar Laser Cutting Digital</b> adalah perusahaan Advertising dan Digital Marketing yang berbasis di kota Purbalingga.
            <b>Mekar Laser Cutting Digital</b> sudah berpengalaman dan memiliki ratusan portfolio dalam bidang periklanan, promosi dan branding
            selama lebih dari 5 tahun. Spesialis Jasa Pembuatan Reklame Huruf Timbul, Neon Box, Baliho dan Branding instansi yang selalu mengutamakan
            kualitas dan mengedepankan professionalisme kerja serta berkomitmen memberikan harga yang realistis bagi klien. Selain produksi Reklame, <b>Mekar Laser Cutting Digital</b> juga melayani kebutuhan Digital Marketing sebagai solusi pemasaran digital. Kami menawarkan beberapa macam kebutuhan akan jasa digital marketing antara lain, pembuatan website, optimasi website, audit dan analisa website / social media, pengelolaan social media, foto produk, pembuatan logo, personal / politik branding. <b>Mekar Laser Cutting Digital</b> adalah One Stop Solutions yang tepat untuk membangun Branding produk atau usaha Anda, menciptakan strategi pemasaran baik offline maupun online. Suatu kebanggaan tersendiri bagi kami untuk membantu bisnis anda tumbuh dan berkembang di era digital. Membantu mendapatkan lebih banyak leads dari trafik, Memenangkan penghargaan atas pekerjaan dan sumber daya kami selama ini.
            </p>
        </div>
    </article>
    <article>
        <div id="judul">
            <h1>Services</h1>
            <p>Most Populer Services at the City</p>
        </div>
        <div class="py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="h-100 border-0">
                        <img src="/img/services/web.jpg" class="card-img-top" id="gambar" alt="...">
                        <div class="card-body mt-3">
                            <h5 class="card-title">Pembuatan Website</h5>
                            <p class="card-text">Website menjadi fasilitas sangat penting untuk pemasaran dan scale up bisnis di era digital ini. Miliki sekarang!</p>
                            <a href="#" class="btn btn-dark" id="button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 border-0">
                        <img src="/img/services/3.png" class="card-img-top" id="gambar" alt="...">
                        <div class="card-body mt-3">
                            <h5 class="card-title">Produksi huruf timbul</h5>
                            <p class="card-text">Huruf timbul kini menjadi bagian penting dalam Branding Offline. Banyaknya manfaat dan kegunaan menjadikan huruf timbul makin populer.</p>
                            <a href="#" class="btn btn-dark" id="button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 border-0">
                        <img src="/img/services/neonbox.jpg" class="card-img-top" id="gambar" alt="...">
                        <div class="card-body mt-3">
                            <h5 class="card-title">Produksi Neon Box</h5>
                            <p class="card-text">Neon box merupakan produk paling penting yang harus dimiliki setiap pengusaha baik pemula maupun profesional. Miliki sekarang!</p>
                            <a href="#" class="btn btn-dark" id="button">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <div class="bg-light">
        <article>
            <div id="judul">
                <h1>Portofolio</h1>
                <p>Read about our latest projects</p>
            </div>
            <div class="py-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card bg-black overlay card-hover-home1 border-0" data-aos="fade-down" data-aos-duration="1000">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/portfolio.png" class="card-img" alt="Portfolio">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Website Development Portfolio</h5>
                                    <span>Digital Creative, Website Development</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover-home2 border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/kanopi.jpg" class="card-img" alt="Kanopi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Kanopi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover-home3 border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150">
                            <a href="#" class="text-white">
                                <img src="/img/portfolio/pagarbesi.jpg" class="card-img" alt="Pagar Besi">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Pagar Besi</h5>
                                    <span>Pekerjaan Besi dan Aluminium</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-black overlay card-hover-home4 border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                            <a href="#" class="text-white">
                                <img src="/img/services/3.png" class="card-img" alt="Huruf Timbul">
                                <div class="overlay-content card-img-overlay text-bottom">
                                    <h5>Foto Bali</h5>
                                    <span>Huruf Timbul</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

</div>
<?= $this->endSection(); ?>