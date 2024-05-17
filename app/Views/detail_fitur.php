<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="container">
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
    <div class="article">
        <img src="image/cek.jpg" alt="Gambar Artikel" style="justify-content: center;">
        <h2>Jenis Pemeriksaan Kesehatan Berkala untuk Cek Kondisi Tubuh Anda</h2>
        <p>Pemeriksaan Kolesterol
            Mengonsumsi makanan berlemak, seperti daging dan jeroan kambing, tapi jangan sampai lupa untuk memeriksa kadar kolesterol saat pemeriksaan kesehatan berkala. Penyakit yang disebabkan oleh kadar kolesterol yang tinggi diantaranya serangan jantung dan stroke.
            Kadar kolesterol bisa dikatakan normal apabila berada pada tingkat dibawah 200 mg/dL. Pastikan juga tekanan darah berada pada tingkat normal, yaitu pada 120/80 agar jauh dari serangan penyakit Hipertensi dan juga Hipotensi.
        </p>
    </div>
    <div class="article">
        <img src="image/cek1.jpg" alt="Gambar Artikel" style="justify-content: center;">
        <h2>Jenis Pemeriksaan Kesehatan Berkala untuk Cek Kondisi Tubuh Anda</h2>
        <p>
        Pemeriksaan dimaksudkan untuk mendiagnosa apakah ada gangguan paru-paru atau tidak. Jenis tindakan lainnya meliputi mengukur volume paru, mekanisme paru, dan juga kemampuan difusi paru.
        Saat memeriksa fungsi paru, akan diketahui berapa jumlah pernapasan yang terjadi selamat kurang lebih 1 menit. Normalnya, usia dewasa akan bernapas sebanyak 16-20 kali dalam waktu semenit.
        </p>
    </div>
    <!-- Artikel lainnya dapat ditambahkan di sini -->
</div>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="image/cek2.jpeg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2>Cek Kesehatan Pada Anak</h2>
                <p>Pertumbuhan anak akan optimal apabila mereka memperoleh kebutuhan gizi secara optimal, meliputi makronutrien serta mikronutrien. Berikut adalah penjelasan dari makronutrien dan mikronutrien untuk asupan anak.</p>
            </div>
        </div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Cek Kesehatan Pada Anak</h2>
                <p>Pertumbuhan anak akan optimal apabila mereka memperoleh kebutuhan gizi secara optimal, meliputi makronutrien serta mikronutrien. Berikut adalah penjelasan dari makronutrien dan mikronutrien untuk asupan anak.</p>
            </div>
            <div class="col-md-6">
                <img src="image/cek2.jpeg" class="img-fluid">
            </div>
        </div>
</div>

<?php $this->endsection() ?>