<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Home
<?php $this->endsection() ?>
<?php $this->section('content') ?>
<link rel="stylesheet" href="asset/sweetalert2/dist/sweetalert2.min.css">
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
<div class="container p-4">
    <div class="col-12" style="height: 20px;"></div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <?php foreach ($banner as $key => $value) { ?>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?= $key ?>" <?php if ($key === 0) {
                                                                                                                echo 'class="active"';
                                                                                                            }?> aria-label="Slide <?= $key + 1 ?>"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($banner as $key => $value) { ?>
                <?php if ($value['layout'] == '1') { ?>
                    <div class="carousel-item <?php if ($key === 0) {
                                                    echo 'active';
                                                }
                                                ?>">
                        <div class="row align-items-center">
                            <div class="col-md-7 ">
                                <img class="rounded" src="<?= $value['gambar'] ?>" class="img-fluid" width="100%" height="480px">

                            </div>
                            <div class="col-md-5 text-end">
                                <h2 class="fw-bold"><?= $value['judul'] ?></h2>
                                <p><?= $value['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } else if ($value['layout'] == '2') { ?>
                    <div class="carousel-item <?php if ($key === 0) {
                                                    echo 'active';
                                                }
                                                ?>">
                        <div class="row align-item-center">
                            <div class="col-md-6 text-start">
                                <h2 class="fw-bold"><?= $value['judul'] ?></h2>
                                <p><?= $value['deskripsi'] ?></p>
                            </div>
                            <div class="col-md-6">
                                <img class="rounded" src="<?= $value['gambar'] ?>" class="img-fluid" width="100%" height="500px">
                            </div>
                        </div>
                    </div>
                <?php } else if ($value['layout'] == '3') { ?>
                    <div class="carousel-item <?php if ($key === 0) {
                                                    echo 'active';
                                                }
                                                ?>">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="article">
                                    <img class="rounded" src="<?php echo $value['gambar'] ?>" alt="" width="100%" height="350px">
                                    <h2 class="mt-2 fw-bold"><?= $value['judul'] ?></h2>
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="col-9 text-center">
                                            <p><?= $value['deskripsi'] ?></p>
                                        </div>
                                    </div>

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
        <div class="col-12" style="margin-top: 50px; height: auto; ">
            <div class="col-12 p-5">
                <div class="col-12 text-center">
                    <h2 class="mb-lg-1 fw-bold"><?= $headsolusi[0]['judul_solusi'] ?>
                    </h2>
                    <p><?= $headsolusi[0]['deskripsi'] ?></p>
                </div>
                <div class="col-12 md-4 d-flex gap-2 flex-wrap justify-content-center mt-4">
                    <?php
                    $solusi_sliced = array_slice($solusi, 0, 3); // Ambil 3 data pertama dari array $solusi
                    foreach ($solusi_sliced as $key => $value) {
                    ?>
                        <div class="card shadow border-none p-2" style="background-color: white ; border-radius: 10px; width: 300px;">
                            <div class="col-12 d-flex justify-content-center mt-2">
                                <img src="<?= $value['gambar'] ?>" alt="" width="120px" height="120px">
                            </div>
                            <div class="card-body p-3 text-center">
                                <h5 class="card-title"><b><?= $value['nama_solusi'] ?></b></h5>
                                <p class="card-text" style="font-size: 15px;"><?= $value['deskripsi'] ?></p>
                                <form action="/fitur/<?= $value['id'] ?>">
                                    <button class="btn btn-lg btn btn-block" style="height: 40px; font-size: 16px; width: 100%;">Fitur</button>
                                </form>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-lg-3 mt-4 fw-bold"><?= $headartikel[0]['judul_artikel'] ?></h2>
                <p><?= $headartikel[0]['deskripsi'] ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($artikel as $key => $value) { ?>
                <div class="col-12 col-md-8 col-lg-6 mb-4">
                    <div class="card shadow" style="padding: 24px;">
                        <div class="card-body">
                            <h4><?= $value['nama_artikel'] ?></h4>
                            <p class="pt-2"><?= $value['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mt-md-0">
            <div style="text-align: left;">
                <p style="font-size: 30px; font-weight: 700;">Ungkapkan Keluhan Bisnis Anda Untuk Mendapatkan Solusi
                </p>
                <p style="font-size: 20px; font-weight: 350;">Ungkapkan Keluhan Bisnis Ada Dan Isi Form Tersebut</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="/ajukan_page_beranda" method="post">
                <?= csrf_field(); ?>
                <div class="shadow-lg rounded p-4">
                    <center style="font-weight: 800; font-size: 20px;">Form</center>
                    <div class="form-group">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="nomerhp">Nomor Telepon :</label>
                        <input type="text" class="form-control" name="nomor_telepon">
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan :</label>
                        <textarea class="form-control" name="pesan" rows="6"></textarea>
                    </div>
                    <br>
                    <center><button type="submit" class="btn btn">Ajukan Keluhan</button></center>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="<?= base_url('asset/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
<script>
    // Aktifkan carousel auto slide
    document.addEventListener('DOMContentLoaded', function() {
        var myCarousel = document.getElementById('carouselExampleDark');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000 // Atur interval auto slide (ms)
        });
    });
    <?= session()->getFlashdata('sweetalert'); ?>
</script>

<?php $this->endsection() ?>