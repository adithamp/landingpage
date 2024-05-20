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
    <div class="card mt-5 shadow p-2">
        <div class="article">
            <img src="image/cek.jpg" alt="Gambar Artikel" style="justify-content: center;">
            <h2>Jenis Pemeriksaan Kesehatan Berkala untuk Cek Kondisi Tubuh Anda</h2>
            <p>Pemeriksaan Kolesterol
                Mengonsumsi makanan berlemak, seperti daging dan jeroan kambing, tapi jangan sampai lupa untuk memeriksa kadar kolesterol saat pemeriksaan kesehatan berkala. Penyakit yang disebabkan oleh kadar kolesterol yang tinggi diantaranya serangan jantung dan stroke.
                Kadar kolesterol bisa dikatakan normal apabila berada pada tingkat dibawah 200 mg/dL. Pastikan juga tekanan darah berada pada tingkat normal, yaitu pada 120/80 agar jauh dari serangan penyakit Hipertensi dan juga Hipotensi.
            </p>
        </div>
    </div>


    <div class="card mt-5 shadow p-2">
        <div class="row">
            <div class="col-md-6">
                <img src="image/cek2.jpeg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Cek Kesehatan Pada Anak</h2>
                <p class="text-center">Pertumbuhan anak akan optimal apabila mereka memperoleh kebutuhan gizi secara optimal, meliputi makronutrien serta mikronutrien. Berikut adalah penjelasan dari makronutrien dan mikronutrien untuk asupan anak.</p>
            </div>
        </div>
    </div>


    <div class="card mt-5 shadow p-2">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Cek Kesehatan Pada Anak</h2>
                <p class="text-center">Pertumbuhan anak akan optimal apabila mereka memperoleh kebutuhan gizi secara optimal, meliputi makronutrien serta mikronutrien. Berikut adalah penjelasan dari makronutrien dan mikronutrien untuk asupan anak.</p>
            </div>
            <div class="col-md-6">
                <img src="image/cek2.jpeg" class="img-fluid">
            </div>
        </div>
    </div>

</div>
<?php $this->endsection() ?>