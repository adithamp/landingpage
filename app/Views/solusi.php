<?php $this->extend('layout/main') ?>
<?php $this->section('layout') ?>
Solusi
<?php $this->endsection() ?>
<?php $this->section('content') ?>

<div class="col-12 d-flex justify-content-center">
    <div class="col-12 p-5">
        <div class="col-12 text-center">
            <p class="mb-lg-3" style="font-size: 40px; font-weight: 500;"><?= $headsolusi[0]['judul_solusi'] ?></p>
            <p><?= $headsolusi[0]['deskripsi'] ?></p>
        </div>
        <div class="col-12 md-4 d-flex gap-2 flex-wrap justify-content-center">
            <?php foreach ($solusi as $key => $value) { ?>
                <div class="card  p-2 shadow" style="background-color: white ; border-radius: 10px; width: 297.5px;">
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

<div class="col-12 d-flex justify-content-center" style="margin-top: 50px;">
    <div class="card col-10 p-4 shadow">
        <div class="text-center mb-4">
            <p style="font-size: 40px; font-weight: 500;">Paket Harga</p>
        </div>
        <div class="container p-2">
            <div class="tabs d-flex justify-content-center">
                <button class="tablink" onclick="bukaTab(event, 'tab1')">Tab 1</button>
                <button class="tablink" onclick="bukaTab(event, 'tab2')">Tab 2</button>
                <button class="tablink" onclick="bukaTab(event, 'tab3')">Tab 3</button>
            </div>

            <div id="tab1" class="tabcontent aktif"> <!-- Menambahkan class aktif -->
                <div class="row justify-content-center">
                    <?php foreach ($paketharga as $key => $value) { ?>
                        <div class="col-md-4 mb-3">
                            <div class="card" style="background-color: white; border-radius: 10px;">
                                <div class="card-body">
                                    <h4 class="card-title text-center"><b><?= $value['nama_paket'] ?></b></h4>
                                    <p class="card-text text-center" style="font-weight: 600; font-size: 20px;"><?= $value['kategori_harga'] ?></p>
                                    <hr>
                                    <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Rp. <?= number_format($value['harga'], '0') ?></p>
                                    <p class="card-text text-center" style="font-weight: 600;font-size: 20px;">Mendapatkan Modul</p>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="ti ti-check text-success"></i> Admisi</li>
                                        <li class="mb-2"><i class="ti ti-check text-success"></i> Dashboard</li>
                                        <li><i class="ti ti-check text-success"></i> Booking Online</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div id="tab2" class="tabcontent">
                <h3>Konten 2</h3>
                <p>Ini adalah konten dari Tab 2.</p>
            </div>

            <div id="tab3" class="tabcontent">
                <h3>Konten 3</h3>
                <p>Ini adalah konten dari Tab 3.</p>
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