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
<div class="container">
    <?php foreach ($tentangkami as $key => $value) { ?>
        <p class="mb-lg-3 text-center" style="font-size: 40px; font-weight: 500;"><?= $value['judul'] ?></p>
        <p class="text-center"><?= $value['deskripsi'] ?></p>
    <?php } ?>
</div>

<?php $this->endsection() ?>