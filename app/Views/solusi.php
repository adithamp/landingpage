<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="col-12 d-flex justify-content-center">
    <div class="col-10 shadow" style="margin-top: 50px; height: auto; ">
            
            <div class="col-12 p-5 shadow">
            <div class="col-12 text-center">
                <p class="mb-lg-3" style="font-size: 40px; font-weight: 500;">Solusi</p>
                <p>Beberapa contoh solusi untuk memudahkan dalam menjalan kan bisnis</p>
            </div>
                <div class="col-12 md-4 d-flex gap-2 flex-wrap justify-content-center">
                    <?php foreach ($solusi as $key => $value) { ?>
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

<div class="col-12 d-flex justify-content-center" style="margin-top: 50px;">
    <div class="card col-10 p-4 shadow">
        <div class="text-center mb-4">
            <p style="font-size: 40px; font-weight: 500;">Paket Harga</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card" style="background-color: white; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title text-center"><b>Paket Harga Dokter</b></h4>
                        <p class="card-text text-center" style="font-weight: 600; font-size: 20px;">Standar</p>
                        <hr>
                        <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Rp. 1,5 Juta</p>
                        <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Mendapatkan Modul</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="ti ti-check text-success"></i> Admisi</li>
                            <li class="mb-2"><i class="ti ti-check text-success"></i> Dashboard</li>
                            <li><i class="ti ti-check text-success"></i> Booking Online</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="background-color: white; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title text-center"><b>Paket Harga Klinik</b></h4>
                        <p class="card-text text-center" style="font-weight: 600; font-size: 20px;">Standar</p>
                        <hr>
                        <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Rp. 1,5 Juta</p>
                        <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Mendapatkan Modul</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="ti ti-check text-success"></i> Admisi</li>
                            <li class="mb-2"><i class="ti ti-check text-success"></i> Dashboard</li>
                            <li><i class="ti ti-check text-success"></i> Booking Online</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="background-color: white; border-radius: 10px;">
                    <div class="card-body">
                        <h4 class="card-title text-center"><b>Paket Harga RumahSakit</b></h4>
                        <p class="card-text text-center" style="font-weight: 600; font-size: 20px;">Standar</p>
                        <hr>
                        <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Rp. 1,5 Juta</p>
                        <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Mendapatkan Modul</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="ti ti-check text-success"></i> Admisi</li>
                            <li class="mb-2"><i class="ti ti-check text-success"></i> Dashboard</li>
                            <li><i class="ti ti-check text-success"></i> Booking Online</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                    <label for="nomerhp">Nomer HP</label>
                    <input type="text" class="form-control" id="nomerhp">
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="6"></textarea>
                </div>

                <br>
                <center><button class="btn btn">Jadwalkan</button></center>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection() ?>