<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
fitur
<?php $this->endsection() ?>
<?php $this->section('content') ?>
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/main.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('asset/poppins/font.css') ?>">
<link rel="stylesheet" href="<?= base_url('../asset/sweetalert2/dist/sweetalert2.min.css') ?>">
<div class="container p-4 ">
    <div class="col-12 " style="text-align: center;">
        <?php if ($fitur) { ?>
            <h1 class="mb-lg-3 mt-5 fw-bold ">Fitur</h1>
            <p>Beberapa Fitur untuk membantu Anda dalam mengakses kesehatan</p>
        <?php } ?>
        <div class="row mt-4 justify-content-center">

            <?php if ($fitur) { ?>
                <?php foreach ($fitur as $key => $value) { ?>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-body text-center">
                                <img src="<?= base_url($value['icon']) ?>" alt="" width=" 50px" height="50px">
                                <div class="col-12" style="height: 100px;">
                                    <h5 class="card-title mt-3 mb-2" style="font-size: 20px;"><?= $value['nama_fitur'] ?></h5>
                                    <p class="card-text mb-3" style="font-size: 14px;"><?= $value['deskripsi'] ?></p>
                                </div>
                                <div class="col-12">
                                    <a href="/detail_fitur/<?= $value['id'] ?>" method="post">
                                        <button class="btn  btn-sm px-3 py-2" style="height: 40px; font-size: 13px; width: 100%;">Detail Fitur</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <div class="col-12" style="height: 100px;">
                                <h5 class="card-title mt-3 mb-2" style="font-size: 20px;"><i class="ti ti-alert-triangle pe-2 fs-1 align-middle p-1 "></i>Fitur belum tersedia</h5>
                                <!-- <p class="card-text mb-3" style="font-size: 14px;">Fitur belum tersedia</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
    <div class="col-12 text-center">
        <h3 class="fw-bold">Paket harga</h3>
    </div>
    <div class="row justify-content-center d-flex" style="flex-wrap: wrap;">
        <?php if ($paketharga) { ?>
            <?php foreach ($paketharga as $key => $value) { ?>
                <div class="col-md-3 mb-3">
                    <div class="card shadow" style="background-color: white; border-radius: 10px;">
                        <div class="card-body">
                            <p class="card-text text-center" style="font-weight: 600; font-size: 24px;">
                                <?= $value['kategori_harga'] ?>
                            </p>
                            <!-- <hr> -->
                            <p class=" text-center " style="font-size: 14px;">Untuk <?= $value['nama_paket'] ?></p>
                            <!-- <h4 class="card-title text-center"><b></b></h4> -->
                            <p class="card-text text-center mt-2" style="font-size: 20px;">Rp.
                                <?= number_format($value['harga'], '0') ?>
                            </p>
                            <p class="card-text text-center" style="font-weight: 600;font-size: 17px;">
                                Mendapatkan Modul</p>
                            <ul class="list-unstyled">
                                <?php foreach ($benefit as $key => $benefit2) { ?>
                                    <?php if ($benefit2['id_paket_harga'] == $value['id']) { ?>
                                        <li class="mb-2" style="font-size: 13px;"><i class="ti ti-check text-success"></i>
                                            <?= $benefit2['nama_benefit'] ?></li>
                                    <?php } else { ?>
                                        <li class="mb-2" style="font-size: 13px;"><i class="ti ti-check text-success"></i>
                                            belum ada benefit</li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="col-md-3 mb-3 text-center">
                <p>Belum ada paket harga</p>
            </div>
        <?php } ?>

    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mt-md-0">
            <div style="text-align: left;">
                <p style="font-size: 30px; font-weight: 700;">Ungkapkan Keluhan Bisnis Anda Untuk Mendapatkan Solusi</p>
                <p style="font-size: 20px; font-weight: 350;">Ungkapkan Keluhan Bisnis Ada Dan Isi Form Tersebut</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="/ajukan_page_fitur" method="post">
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
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('../asset/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
<?= session()->getFlashdata('sweetalert'); ?>
<?php $this->endsection() ?>