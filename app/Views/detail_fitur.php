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
<div class="container shadow-sm p-3 mt-5">
    <div class="col-12 text-center">
        <p class="mb-lg-3" style="font-size: 40px; font-weight: 500;">Detail Fitur</p>
        <p>Deskripsi</p>
    </div>
    <?php foreach ($detailfitur as $key => $value) { ?>
        <?php if ($value['layout'] == '1') { ?>
            <div class="card mt-5 shadow p-2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= $value['gambar'] ?>" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                    <h2><?= $value['judul_detail'] ?></h2>
                        <p><?= $value['deskripsi'] ?></p>
                    </div>
                </div>
            </div>
        <?php } else if ($value['layout'] == '2') { ?>
            <div class="card mt-5 shadow p-2">
                <div class="row">
                    <div class="col-md-6">
                        <h2><?= $value['judul_detail'] ?></h2>
                        <p><?= $value['deskripsi'] ?></p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?= $value['gambar'] ?>" class="img-fluid">
                    </div>
                </div>
            </div>
        <?php } else if ($value['layout'] == '3') { ?>
            <div class="card mt-5 shadow p-2">
                <div class="article">
                    <img src="<?= $value['gambar'] ?>" alt="Gambar Artikel" style="justify-content: center;">
                    <h2><?= $value['judul_detail'] ?></h2>
                    <p><?= $value['deskripsi'] ?></p>
                </div>
            </div>
        <?php } else { ?>
            <!-- kalo nama_layoutnya ga ada kasih div untuk default -->
        <?php } ?>

    <?php } ?>

</div>
<?php $this->endsection() ?>