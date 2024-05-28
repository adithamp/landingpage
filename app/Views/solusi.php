<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>
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
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3" > <!-- Mengatur lebar tab sesuai dengan ukuran layar -->
                            <div class="shadow tablink rounded" onclick="bukaTab(event, 'tab<?= $key + 1 ?>')" style="background-color: white; border: 0.5px #03c988 solid;">
                                <div class="text-center p-2">
                                    <h6 class="fw-bold"><?= $value['nama_solusi'] ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>  
            <br>
            <div id="tab1" class="tabcontent aktif"> <!-- Menambahkan class aktif -->
                <div class="row d-flex justify-content-center">
                    <?php foreach ($paketharga as $key => $value) { ?>
                        <br>
                        <div class="col-md-4 mb-3">
                            <div class="card shadow" style="background-color: white; border-radius: 10px; width: 300px; ">
                                <div class="card-body">
                                    <h4 class="card-title text-center"><b><?= $value['nama_paket'] ?></b></h4>
                                    <p class="card-text text-center" style="font-weight: 600; font-size: 20px;">
                                        <?= $value['kategori_harga'] ?>
                                    </p>
                                    <hr>
                                    <p class="card-text text-center" style="font-size: 20px;">Rp.
                                        <?= number_format($value['harga'], '0') ?>
                                    </p>
                                    <p class="card-text text-center" style="font-weight: 600;font-size: 17px;">
                                        Mendapatkan
                                        Modul</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-2" style="font-size: 13px;"><i class="ti ti-check text-success"></i> Admisi</li>
                                        <li class="mb-2" style="font-size: 13px;"><i class="ti ti-check text-success"></i> Dashboard</li>
                                        <li style="font-size: 13px;"><i class="ti ti-check text-success"></i> Booking Online</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                 <div id=" tab2" class="tabcontent">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4 mb-3 text-center">
                                                        <h6 style="color:darkgrey;">Paket harga untuk rumah sakit belum tersedia</h6>
                                                    </div>
                                                </div>
                                </div>

                                <div id="tab3" class="tabcontent">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4 mb-3 text-center">
                                            <h6 style="color:darkgrey;">Paket harga untuk dokter belum tersedia</h6>
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
                                <p style="font-size: 30px; font-weight: 700;">Ungkapkan Keluhan Bisnis Anda Untuk Mendapatkan Solusi
                                </p>
                                <p style="font-size: 20px; font-weight: 350;">Ungkapkan Keluhan Bisnis Ada Dan Isi Form Tersebut</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <form action="/ajukan_page_beranda" method="post">
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
            </div>
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
                }

                // Secara default, buka tab pertama
                document.getElementsByClassName("tablink")[0].click();
            </script>
            <?php $this->endsection() ?>