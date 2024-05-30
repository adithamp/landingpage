<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/poppins/font.css">
    <link rel="stylesheet" href="asset/sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
    <style>
        .nav-item.active .nav-link {
            color: #03c988
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg sticky-top" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand p-0 m-0 fw-600" href="/home">GoldStep</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto fs-6 gap-3">
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/home') ? 'active' : ''; ?>">
                        <a class="nav-link" aria-current="page" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/solusi') ? 'active' : ''; ?>">
                        <a class="nav-link" href="/solusi">Solusi</a>
                    </li>
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/tentangkami') ? 'active' : ''; ?>">
                        <a class="nav-link" href="/tentangkami">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        <main>
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <div class="col-12 mt-4">
        <div class="card" style="background-color: white;">
            <div class="card-body row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="d-flex justify-content-center gap-1 mt-2">
                        <div class="lingkaran p-2">
                            <a class="text-decoration-none" href="<?= $footer[0]['link_whatsapp'] ?>">
                                <i class="ti ti-brand-whatsapp text-light" style="font-size: 36px;"></i>
                            </a>
                        </div>
                        <div class="lingkaran p-2">
                            <a class="text-decoration-none" href="<?= $footer[0]['link_instagram'] ?>">
                                <i class="ti ti-brand-instagram text-light" style="font-size: 36px;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <p class="txt m-0 p-0"><?= $footer[0]['nama_lengkap'] ?></p>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="text-center">
                        <p class="txt p-0 m-0 fw-bold">Informasi</p>
                        <div class="p-2">
                            <a href="">
                                <p class="txt p-0 m-0 pb-2 text-decoration-underline" style="font-size: 14px;">Pusat Bantuan</p>
                            </a>
                            <a href="/privacypolicy">
                                <p class="txt p-0 m-0 pb-2 text-decoration-underline" style="font-size: 14px;">Privacy Policy</p>
                            </a>
                            <a href="/termcondition">
                                <p class="txt p-0 m-0 pb-2 text-decoration-underline" style="font-size: 14px;">Terms & Conditions</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-12 text-center">
                        <p class="txt p-0 m-0 fw-bold">Contact</p>
                    </div>
                    <div class="col-12 p-2 text-start">
                        <p class="txt p-0 m-0 pb-2" style="font-size: 14px;"><?= $footer[0]['email'] ?></p>
                        <p class="txt p-0 m-0 pb-2" style="font-size: 14px;"><?= $footer[0]['nomor_telepon'] ?></p>
                        <p class="txt p-0 m-0" style="font-size: 14px;"><?= $footer[0]['alamat'] ?></p>
                    </div>
                </div>
            </div>
            <div class="footer col-12 d-flex flex-column align-items-center pt-3" style="height: auto;">
                <p class="txt p-0 m-0 text-light fw-bold mb-2" style="font-size: 15.5px;"><?= $footer[0]['nama'] ?></p>
                <p class="txt p-0 m-0 text-light" style="font-size: 15.5px;"><?= $footer[0]['hak_cipta'] ?></p>
            </div>
        </div>
    </div>



</body>

<script src="js/bootstrap.min.js"></script>
<script src="<?php base_url('asset/sweetalert2/dist/sweetalert2.all.js') ?>"></script>
<?php session()->getFlashdata('sweetalert'); ?>
</html>