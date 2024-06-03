<?php $this->extend('layout/main'); ?>
<?php $this->section('layout'); ?>
Solusi
<?php $this->endsection(); ?>
<?php $this->section('content'); ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="public/asset/sweetalert2/dist/sweetalert2.min.css">
<!-- <style>
    .shadow tablink rounded aktif{
        background-color: #4CAF50;
    }
</style> -->
<div class="container">
    <br>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-12">
            <div class="col-12 text-center mt-2">
                <h1 class="mb-lg-3 fw-bold"><?= $headsolusi[0]['judul_solusi'] ?></h1>
                <p><?= $headsolusi[0]['deskripsi'] ?></p>
            </div>
            <div class="row gap-2 mt-4 d-flex flex-wrap justify-content-center">
                <?php foreach ($solusi as $key => $value) { ?>
                    <div class="card shadow p-2" style="background-color: white ; border-radius: 10px; width: 270px;">
                        <div class="col-12 d-flex justify-content-center mt-2">
                            <img src="<?= $value['gambar'] ?>" alt="" width="120px" height="120px">
                        </div>
                        <div class="card-body p-3 text-center">
                            <h5 class="card-title"><b><?= $value['nama_solusi'] ?></b></h5>
                            <p class="card-text" style="font-size: 15px; height: 50px;"><?= $value['deskripsi'] ?></p>
                            <form action="/fitur/<?= $value['id'] ?>">
                                <button class="btn btn-lg btn btn-block" style="height: 40px; font-size: 16px; width: 100%;">Fitur</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center" style="margin-top: 50px;">
        <div class="col-10">
            <div class="text-center mb-4">
                <p style="font-size: 30px; font-weight: bold;">Paket Harga</p>
            </div>
            <div class="container p-2">
                <div class="row justify-content-center">
                    <?php foreach ($solusi as $key => $value) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3"> <!-- Mengatur lebar tab sesuai dengan ukuran layar -->
                            <div class="shadow tablink rounded-5" onclick="bukaTab(event, 'tab<?= $key + 1 ?>')" style="background-color: white; border: 0.5px #03c988 solid;">
                                <div class="text-center ">
                                    <h6 class="fw-bold pt-2"><?= $value['nama_solusi'] ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <br>
            <?php foreach ($solusi as $key => $value) { ?>
                <div id="tab<?= $key + 1 ?>" class="tabcontent aktif btn-aktiv">
                    <div class="row d-flex justify-content-center" style="margin: auto;">
                        <?php
                        if ($paketharga[$value['id']] != null) {
                            // Menggunakan array_slice untuk membatasi jumlah data yang ditampilkan menjadi 3
                            $limited_packages = array_slice($paketharga[$value['id']], 0, 3);
                            foreach ($limited_packages as $key => $package) { ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow" style="background-color: white; border-radius: 10px; width: 300px; ">
                                        <div class="card-body">
                                            <p class="card-text text-center" style="font-weight: 600; font-size: 24px;">
                                                <?= $package['kategori_harga'] ?>
                                            </p>
                                            <!-- <hr> -->
                                            <p class=" text-center " style="font-size: 14px;">Untuk <?= $package['nama_paket'] ?></p>
                                            <!-- <h4 class="card-title text-center"><b></b></h4> -->
                                            <p class="card-text text-center mt-2" style="font-size: 20px;">Rp.
                                                <?= number_format($package['harga'], '0') ?>
                                            </p>
                                            <p class="card-text text-center" style="font-weight: 600;font-size: 17px;">
                                                Mendapatkan Modul</p>
                                            <ul class="list-unstyled">
                                                <?php foreach ($benefit as $key => $benefit2) { ?>
                                                    <?php if ($benefit2['id_paket_harga'] == $package['id']) { ?>
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
                            <?php }
                        } else { ?>
                            <p class="text-center light">Paket harga belum tersedia</p>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container p-4">
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mt-md-0">
            <div style="text-align: left;">
                <p style="font-size: 30px; font-weight: 700;">Ungkapkan Keluhan Bisnis Anda Untuk Mendapatkan Solusi
                </p>
                <p style="font-size: 20px; font-weight: 350;">Ungkapkan Keluhan Bisnis Ada Dan Isi Form Tersebut</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <form action="/ajukan_page_solusi" method="post">
                <?= csrf_field() ?>
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
</div>
<script src="<?= base_url('asset/sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
<script>
    // Fungsi untuk membuka tab tertentu
    function bukaTab(evt, namaTab) {
        // Sembunyikan semua konten tab
        var i, kontenTab, tombolTab;
        kontenTab = document.getElementsByClassName("tabcontent");
        for (i = 0; i < kontenTab.length; i++) {
            kontenTab[i].style.display = "none";
        }

        // Hapus kelas 'aktif' dari semua tombol tab
        tombolTab = document.getElementsByClassName("tablink");
        for (i = 0; i < tombolTab.length; i++) {
            tombolTab[i].className = tombolTab[i].className.replace(" aktif", "");
        }

        // Tampilkan konten tab tertentu
        document.getElementById(namaTab).style.display = "block";

        // Tambahkan kelas 'aktif' ke tombol yang membuka tab
        evt.currentTarget.className += " aktif";

        evt.currentTarget.style.backgroundColor = "#03c988 ";
        // evt.currentTarget.style.Color = "#fff ";

        // Hapus warna latar belakang dari tab sebelumnya yang tidak aktif
        var tabs = document.getElementsByClassName("shadow tablink rounded-5");
        for (var i = 0; i < tabs.length; i++) {
            if (tabs[i] !== evt.currentTarget) {
                tabs[i].style.backgroundColor = "";
                // tabs[i].style.Color = "#000";
            }
        }
    }

    // Secara default, buka tab pertama
    document.getElementsByClassName("tablink")[0].click();
    <?= session()->getFlashdata('sweetalert'); ?>
</script>
<!-- <script src="../asset/sweetalert2/dist/sweetalert2.all.min.js"></script> -->

<?php $this->endsection(); ?>