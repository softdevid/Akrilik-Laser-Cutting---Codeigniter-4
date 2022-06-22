<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<div class="container">
    <img src="/img/portfolio/<?= $portfolio['gambar'] ?>" alt="" sizes="300px" class="card-img-top" style="min-width: 100%;">
    <div class="mt-5">
        <p>Nama Produk: <?= $portfolio['judul_produk'] ?></p>
        <p>Client: <?= $portfolio['client'] ?></p>
        <p>Location: <?= $portfolio['lokasi'] ?></p>
        <p>Jenis Produk: <?php
                            if ($portfolio['jenis_produk'] == 1) {
                                echo "Huruf Timbul";
                            } elseif ($portfolio['jenis_produk'] == 2) {
                                echo "Neon Box";
                            } elseif ($portfolio['jenis_produk'] == 3) {
                                echo "Papan Reklame";
                            } elseif ($portfolio['jenis_produk'] == 4) {
                                echo "Digital Creative";
                            } else {
                                echo "Prototype IOT";
                            }
                            ?></p>
    </div>
</div>

<?= $this->endSection() ?>