<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="container" style="text-align: center;">
    <p class="mb-lg-3" style="font-size: 40px; font-weight: 500;">Fitur</p>
    <p>Beberapa Fitur untuk memabtu anda dalam mengakses kesehatan</p>
    <div class="container mt-4" style="display: flex; flex-wrap: wrap; justify-content: center; width: 1000px;">
        <div class="card" style="width: 200px; height: auto; margin-right: 20px; margin-bottom: 20px;">
            <div class="card-body text-center">
                <i class="ti ti-device-heart-monitor" style="color: #03c988; font-size: 50px; margin-top: 5px;"></i>
                <h5 class="card-title">Cek Kesehatan</h5>
                <p class="card-text">Ketahui Kesehatan Anda di Sini</p>
                <form action="/detail_fitur">
                <button class="btn btn">Detail Fitur</button>
                </form>
            </div>
        </div>
        <div class="card" style="width: 200px; height: auto; margin-right: 20px; margin-bottom: 20px;">
            <div class="card-body text-center">
                <i class="ti ti-ambulance" style="color: #03c988; font-size: 50px; margin-top: 5px;"></i>
                <h5 class="card-title">Ambulan</h5>
                <p class="card-text">Cara Menghubungi Transportasi</p>
                <button class="btn btn">Detail Fitur</button>
            </div>
        </div>

        <div class="card" style="width: 200px; margin-right: 20px; margin-bottom: 20px;">
            <div class="card-body" style="text-align: center;">
                <i class="ti ti-emergency-bed" style="color: #03c988; font-size: 50px; margin-top: 5px;"></i>
                <h5 class="card-title">Ruangan</h5>
                <p>Cara Melihat Kamar yang Tersedia</p>
                <button class="btn btn">Detail Fitur</button>
            </div>
        </div>
        <div class="card" style="width: 200px; margin-right: 20px; margin-bottom: 20px;">
            <div class="card-body" style="text-align: center;">
                <i class="ti ti-medical-cross" style="color: #03c988; font-size: 50px; margin-top: 5px;"></i>
                <h6 class="card-title">Obat-Obatan</h6>
                <p>Cara Mengambil Resep/Obat</p>
                <button class="btn btn">Detail Fitur</button>
            </div>
        </div>
        <!-- Repeat the above HTML for the other 4 cards -->
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
                <center><button class="btn btn">Ajukan Keluhan</button></center>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection() ?>