<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/poppins/font.css">
</head>
<body>
    <style>
        .nav-item.active .nav-link {
            color: #03c988
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg sticky-top" style="background-color: white;">
        <div class="container">
            <!-- <div > -->
                <!-- <img src="image/gold.png" class="logo img-fluid" style="width: 50px; height: 50px;"> -->
                <p class="navbar-brand p-0 m-0 fw-600"  href="/home">GoldStep</p>
            <!-- </div> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-6 gap-3">
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/home') ? 'active' : ''; ?>">
                        <a class="nav-link" aria-current="page" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/solusi') ? 'active' : ''; ?>">
                        <a class="nav-link" href="/solusi">Solusi</a>
                    </li>
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] === '/tentangkami') ? 'active' : ''; ?>">
                        <a class="nav-link" href="/tentangkami">TentangKami</a>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <div class="">
        <main >
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <div class="col-12 mt-4">
        <div class="card" style="width: 100%; height: auto; background-color: white;;">
            <div class="card-body d-flex" style="background-color: white;">
                <div class="col-4">
                    <div class="col-12 d-flex justify-content-center gap-1 mt-2" >
                        <div class="col-2 text-center d-flex justify-content-center">
                            <div class="lingkaran p-2">
                                <a class="text-decoration-none" href="">
                                    <i class="ti ti-brand-whatsapp text-light" style="font-size: 36px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-2 text-center d-flex justify-content-center">
                            <div class="lingkaran p-2">
                                <a class="text-decoration-none" href="">
                                    <i class="ti ti-brand-instagram text-light" style="font-size: 36px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center mt-4">
                        <p class="txt m-0 p-0">Pt.Goldstep Teknologi Indonesia</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-12 text-center">
                        <p class="txt p-0 m-0 fw-bold">Informasi</p>
                        <div class="col-12 p-2">
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
                <div class="col-4 d-flex justify-content-center">
                    <div class="col-6">
                        <div class="col-12 text-center">
                            <p class="txt p-0 m-0 fw-bold">Contact</p>
                        </div>
                        <div class="col-12 p-2 text-start">
                            <p class="txt p-0 m-0 pb-2" style="font-size: 14px;">goldstep@gmail.com</p>
                            <p class="txt p-0 m-0 pb-2" style="font-size: 14px;">+098765456789</p>
                            <p class="txt p-0 m-0" style="font-size: 14px;">Taman Kopo Indah 3, Ruko D35 Bandung, Indonesia, 40128</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer col-12 d-flex justify-content-center pt-3">
                <p class="txt p-0 m-0 text-light fw-bold" style="font-size: 15.5px;">GoldStep</p>
                <p class="txt ps-5 p-0 m-0 text-light" style="font-size: 15.5px;">Copyright 2024 PT.Goldstep Teknologi Indonesia</p>
            </div>
        </div>
    </div>


</body>

<script src="js/bootstrap.min.js"></script>

</html>