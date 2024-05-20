<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="d-flex">
    <div class="" style="margin-top: 180px;margin-left: 50px;">
        <h2>PT Goldstep Teknologi Indonesia</h2>
        <p>default</p>
    </div>
    <img src="image/cici.jpg" style=" max-width: 50%;height: auto;margin-left: 155px;">
</div>
<div class="container mt-5">
    <div class="col-12 d-flex flex-wrap gap-2 justify-content-center">
        <?php foreach ($tentangkami as $key => $value) { ?>
            <div class="card shadow col" style="padding: 24px; height: auto; width: 100%; flex: 1 0 500px;">
                <div class="textarea1">
                    <p><?= $value['judul'] ?></p>
                </div>
                <div class="card-body">
                    <p><?= $value['deskripsi'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
    <?php $this->endsection() ?>