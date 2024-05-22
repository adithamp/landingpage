<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Home
<?php $this->endsection() ?>
<?php $this->section('content') ?>
<style>
    .article {
        margin-bottom: 30px;
        text-align: center;
    }

    .article img {
        max-width: 100%;
        height: 419px;
        width: 800px;
        margin-bottom: 10px;

    }

    .article h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .article p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 20px;
    }
</style>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
        <?php foreach ($banner as $key => $value) { ?>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $key ?>" <?php if ($key === 0) echo 'class="active"'; ?> aria-label="Slide <?= $key + 1 ?>"></button>
        <?php } ?>
    </div>
    <div class="carousel-inner">
        <?php foreach ($banner as $key => $value) { ?>
            <?php if ($value['layout'] == '1') { ?>
                <div class="carousel-item <?php if ($key === 0) echo 'active'; ?>">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="<?= $value['gambar'] ?>" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h2><?= $value['judul'] ?></h2>
                            <p><?= $value['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } else if ($value['layout'] == '2') { ?>
                <div class="carousel-item <?php if ($key === 0) echo 'active'; ?>">
                    <div class="row align-item-center">
                        <div class="col-md-6">
                            <h2><?= $value['judul'] ?></h2>
                            <p><?= $value['deskripsi'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?= $value['gambar'] ?>" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } else if ($value['layout'] == '3') { ?>
                <div class="carousel-item <?php if ($key === 0) echo 'active'; ?>">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="article">
                                <img src="<?= $value['gambar'] ?>" alt="Gambar Artikel">
                                <h2><?= $value['judul'] ?></h2>
                                <p><?= $value['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>


<br>
<div class="col-12 d-flex justify-content-center">
    <div class="col-10 shadow" style="margin-top: 50px; height: auto; ">

        <div class="col-12 p-5 shadow">
            <div class="col-12 text-center">
                <p class="mb-lg-3" style="font-size: 40px; font-weight: 500;"><?= $headsolusi[0]['judul_solusi'] ?></p>
                <p><?= $headsolusi[0]['deskripsi'] ?></p>
            </div>
            <div class="col-12 md-4 d-flex gap-2 flex-wrap justify-content-center">
                <?php
                $solusi_sliced = array_slice($solusi, 0, 3); // Ambil 3 data pertama dari array $solusi
                foreach ($solusi_sliced as $key => $value) {
                ?>
                    <div class="card  p-2" style="background-color: white ; border-radius: 10px; width: 297.5px;">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="<?= $value['gambar'] ?>" alt="" width="120px" height="120px">
                        </div>
                        <div class="card-body p-3 text-center">
                            <h4 class="card-title"><b><?= $value['nama_solusi'] ?></b></h4>
                            <p class="card-text"><?= $value['deskripsi'] ?></p>
                            <form action="/fitur">
                                <button class="btn btn-lg btn btn-block">Fitur</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="col-12 text-center">
        <p class="mb-lg-3 mt-4" style="font-size: 30px; font-weight: 500;"><?= $headartikel[0]['judul_artikel'] ?></p>
        <p><?= $headartikel[0]['deskripsi'] ?></p>
    </div>
</div>
<div class="container">
    <div class="col-12 d-flex flex-wrap gap-2 justify-content-center">
        <?php foreach ($artikel as $key => $value) { ?>
            <div class="card shadow col" style="padding: 24px; height: auto; width: 100%; flex: 1 0 500px;">
                <div class="textarea1">
                    <p><?= $value['nama_artikel'] ?></p>
                </div>
                <div class="card-body">
                    <p><?= $value['deskripsi'] ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mt-md-0">
            <div style="text-align: left;">
                <p style="font-size: 30px; font-weight: 700;">Ungkapkan Keluhan Bisnis Anda Untuk Mendapatkan Solusi</p>
                <p style="font-size: 20px; font-weight: 350;">Ungkapkan Keluhan Bisnis Ada Dan Isi Form Tersebut</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="shadow-lg rounded p-4">
                <center style="font-weight: 800; font-size: 20px;">Form</center>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="nomerhp">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomerhp">
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="6"></textarea>
                </div>

                <br>
                <center><button class="btn btn">Ajukan Keluhan</button></center>
            </div>
        </div>
    </div>
</div>
<script>
    // Aktifkan carousel auto slide
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = document.getElementById('carouselExampleDark');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000 // Atur interval auto slide (ms)
        });
    });
</script>
<?php $this->endsection() ?>