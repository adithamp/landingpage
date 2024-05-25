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
<div class="container p-3 mt-5">
    <div class="col-12 text-center">
        <h2 class="mb-lg-3 fw-bold">Mudahkan pemeriksaan kesehatan dengan Modul MCU Trustmedis, dapatkan hasil lengkap dan sertifikat MCU dengan cara pembayaran yang beragam</h2>
        <p>Deskripsi</p>
    </div>
    <div class="col-12 rounded p-4" style="background-color: #fafafa;">
        <div class="col rounded p-4" style="background-color: white;">
            <?php foreach ($detailfitur as $key => $value) { ?>
                <?php if ($value['layout'] == '1') { ?>
                    <div class="mt-2 p-2">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= $value['gambar'] ?>" class="img-fluid">
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
                                <img src="<?= $value['gambar'] ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- kalo nama_layoutnya ga ada kasih div untuk default -->
                <?php } ?>

            <?php } ?>
        </div>
    </div>
</div>
<?php $this->endsection() ?>