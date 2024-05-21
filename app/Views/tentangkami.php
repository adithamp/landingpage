<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="container mt-4">
    <div class="d-flex justify-content-end align-items-center">
        <div style="margin-top: 50px; margin-right: 50px;">
            <h2><?= $headeraboutus[0]['judul_banner'] ?></h2>
            <p><?= $headeraboutus[0]['deskripsi'] ?></p>
        </div>
        <img src="image/cici.jpg" class="img-fluid" style="max-width: 50%; height: auto; margin-left: auto;">
    </div>
    <div class="row mt-5">
        <?php foreach ($tentangkami as $key => $value) { ?>
            <div class="col-12 col-md-6 col-lg-6 mb-4" style="padding: 20xx; height: auto; width: 100%; flex: 1 0 500px;">
                <div class="card shadow" style="height: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['judul'] ?></h5>
                        <p class="card-text"><?= $value['deskripsi'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



<?php $this->endsection() ?>