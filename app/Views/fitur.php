<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
fitur
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="container" style="text-align: center;">
    <p class="mb-lg-3" style="font-size: 40px; font-weight: 500;">Fitur</p>
    <p>Beberapa Fitur untuk membantu Anda dalam mengakses kesehatan</p>
    <div class="row mt-4 justify-content-center">
        <?php foreach ($fitur as $key => $value) { ?>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <img src="<?= $value['icon'] ?>" alt="" width="50px" height="50px">
                        <div class="col-12" style="height: 100px;">
                        <h5 class="card-title mt-3 mb-2" style="font-size: 20px;"><?= $value['nama_fitur'] ?></h5>
                        <p class="card-text mb-3" style="font-size: 16px;"><?= $value['deskripsi'] ?></p>
                        </div>
                        <div class="col-12">
                        <form action="/detail_fitur">
                            <button class="btn  btn-sm px-3 py-2">Detail Fitur</button>
                        </form>
                        </div>
                    </div>
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
<?php $this->endsection() ?>