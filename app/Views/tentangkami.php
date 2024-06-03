<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="container mt-4 p-4">
    <div class="d-flex flex-column-reverse flex-md-row justify-content-md-between align-items-center">
        <div style="margin-top: 50px; margin-right: 50px;">
            <h2><?= $headeraboutus[0]['judul_banner'] ?></h2>
            <p><?= $headeraboutus[0]['deskripsi'] ?></p>
        </div>
        <img src="image/cici.jpg" class="img-fluid mx-auto mt-4 mt-md-0" style="max-width: 50%; height: auto;">
    </div>
    <div class="row mt-5">
        <?php foreach ($tentangkami as $key => $value) { ?>
            <div class="col-12 col-md-6 mb-4">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?= $value['judul'] ?></h5>
                        <p class="card-text" style="font-size: 15px;"><?= $value['deskripsi'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>




<?php $this->endsection() ?>