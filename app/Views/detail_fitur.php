<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<style>
    .article {
        margin-bottom: 30px;
        text-align: center;
    }

    .article img {
        max-width: 100%;
        height: 300px;
        width: 600px;
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
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/main.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('asset/poppins/font.css') ?>">
</div>
<div class="container p-3 mt-5">
    <div class="col-12 text-center">
        <h4 class="mb-lg-3 fw-bold">Detail fitur</h4>
        <p>Berikut detail fitur </p>
    </div>
    <div class="col-12 rounded p-4" style="background-color: #fafafa;">
        <div class="col rounded p-4" style="background-color: white;">
            <?php if ($detailfitur) { ?>
                <?php foreach ($detailfitur as $key => $value) { ?>
                    <?php if ($value['layout'] == '1') { ?>
                        <div class="mt-2 p-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?= base_url($value['gambar']) ?>" class="img-thumbnail" height="200" width="300">

                                </div>
                                <div class="col-md-6">
                                    <h3 class="fw-bold"><?= $value['judul_detail'] ?></h3>
                                    <p><?= $value['deskripsi'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } else if ($value['layout'] == '2') { ?>
                        <div class="mt-2 p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="fw-bold"><?= $value['judul_detail'] ?></h3>
                                    <p><?= $value['deskripsi'] ?></p>
                                </div>
                                <div class="col-md-6">
                                    <img src="<?= base_url($value['gambar']) ?>" class="img-fluid" height="200" width="300">
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <!-- kalo nama_layoutnya ga ada kasih div untuk default -->
                    <?php } ?>

                <?php } ?>
            <?php } else { ?>
                <div class="mt-2 p-3">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5 class="card-title mt-3 mb-2" style="font-size: 20px;"><i class="ti ti-alert-triangle pe-2 fs-1 align-middle p-1 "></i>Belum ada detail fitur</h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<?php $this->endsection() ?>