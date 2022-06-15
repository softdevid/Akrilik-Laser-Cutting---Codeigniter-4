<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="background-portfolio">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Huruf Timbul</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                    type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Neonbox</button>
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
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">...</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-reklame" role="tabpanel" aria-labelledby="pills-reklame-tab"
                tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-besi" role="tabpanel" aria-labelledby="pills-besi-tab" tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab" tabindex="0">
                ...</div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>