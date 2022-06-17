<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>

<div>
    <img src="/img/1.jpg" alt="" style="width: 100%; max-height: 300px;">
</div>

<div class="container">
    <div class="p-5">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-advertising-tab" data-bs-toggle="pill" data-bs-target="#pills-advertising" type="button" role="tab" aria-controls="pills-advertising" aria-selected="false">Advertising</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-digitalmarketing-tab" data-bs-toggle="pill" data-bs-target="#pills-digitalmarketing" type="button" role="tab" aria-controls="pills-digitalmarketing" aria-selected="false">Digital Marketing</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active mt-5" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
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
                    <div class="col">
                        <div class="h-100 border-0">
                            <img src="/img/services/reklame.jpg" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">Produksi Papan Reklame</h5>
                                <p class="card-text">Papan reklame, papan iklan, atau baliho merupakan salah satu media luar ruang yang memiliki tujuan menyampaikan pesan mengenai suatu produk atau jasa bahkan individu-individu yang ingin mendongkrak popularitas.</p>
                                <a href="#" class="btn btn-dark" id="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100 border-0">
                            <img src="/img/services/dekstop.jpg" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">Pembuatan Aplikasi Dekstop</h5>
                                <p class="card-text">Aplikasi desktop adalah aplikasi yang berjalan di desktop atau laptop komputer pengguna, manfaat utama dari aplikasi desktop adalah efisiensi tinggi dan fleksibilitas antarmuka pengguna.</p>
                                <a href="#" class="btn btn-dark" id="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-advertising" role="tabpanel" aria-labelledby="pills-advertising-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4">
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
                    <div class="col">
                        <div class="h-100 border-0">
                            <img src="/img/services/3.png" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">Produksi Huruf Timbul</h5>
                                <p class="card-text">Huruf timbul kini menjadi bagian penting dalam Branding Offline. Banyaknya manfaat dan kegunaan menjadikan huruf timbul makin populer.</p>
                                <a href="#" class="btn btn-dark" id="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="h-100 border-0">
                            <img src="/img/services/reklame.jpg" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">Produksi Papan Reklame</h5>
                                <p class="card-text">Papan reklame, papan iklan, atau baliho merupakan salah satu media luar ruang yang memiliki tujuan menyampaikan pesan mengenai suatu produk atau jasa bahkan individu-individu yang ingin mendongkrak popularitas.</p>
                                <a href="#" class="btn btn-dark" id="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-digitalmarketing" role="tabpanel" aria-labelledby="pills-digitalmarketing-tab" tabindex="0">
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
                            <img src="/img/services/dekstop.jpg" class="card-img-top" id="gambar" alt="...">
                            <div class="card-body mt-3">
                                <h5 class="card-title">Pembuatan Aplikasi Dekstop</h5>
                                <p class="card-text">Aplikasi desktop adalah aplikasi yang berjalan di desktop atau laptop komputer pengguna, manfaat utama dari aplikasi desktop adalah efisiensi tinggi dan fleksibilitas antarmuka pengguna.</p>
                                <a href="#" class="btn btn-dark" id="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>