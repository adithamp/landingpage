<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg sticky-top" style="background-color: white;">
    <div class="container">
        <img src="image/gold.png" class="logo img-fluid" style="width: 50px; height: 50px;">
        <h5 class="navbar-brand" href="/home">GoldStep</h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link"  aria-current="page" href="/home">Beranda</a>
                <a class="nav-link"  href="/solusi">Solusi</a>
                <a class="nav-link"  href="/tentangkami">TentangKami</a>
            </div>
        </div>
    </div>
</nav>
    <div class="">
        <main>
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <div class="col-12 mt-4">
        <div class="card" style="width: 100%; height: 200px; background-color: white;">
            <div class="card-body d-flex" style="background-color: white;">
                <div class="col-4">
                    <div class="col d-flex justify-content-center gap-3">
                        <div class="col-2 text-center d-flex justify-content-center st-1">
                            <div class="lingkaran p-2">
                                <a href="">
                                    <i class="ti ti-brand-whatsapp text-light" style="font-size: 36px;"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-2 text-center d-flex justify-content-center mt-1">
                            <div class="lingkaran p-2">
                                <a href="">
                                    <i class="ti ti-brand-instagram text-light" style="font-size: 36px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center mt-4" >
                        <p class="txt m-0 p-0">Pt.Goldstep Teknologi Indonesia</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="col-12 text-center">
                        <p class="txt p-0 m-0 fs-5 fw-bold">Informasi</p>
                        <div class="col-12 p-2">
                            <a href="">
                                <p class="txt p-0 m-0 fs-5 pb-2 text-decoration-underline">Pusat Bantuan</p>
                            </a>
                            <a href="">
                                <p class="txt p-0 m-0 fs-5 pb-2 text-decoration-underline">Privacy Policy</p>
                            </a>
                            <a href="">
                                <p class="txt p-0 m-0 fs-5 pb-2 text-decoration-underline">Terms & Conditions</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="col-7 justify-content-center">
                        <p class="txt p-0 m-0 fs-5 fw-bold">Contact</p>
                        <div class="col-12 p-2 tetx-start">
                            <p class="txt p-0 m-0 fs-5 pb-2">goldstep@gmail.com</p>
                            <p class="txt p-0 m-0 fs-5 pb-2">+098765456789</p>
                            <p class="txt p-0 m-0 fs-6">Taman Kopo Indah 3, Ruko D35 Bandung, Indonesia, 40128</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer col-12 d-flex justify-content-center pt-3">
                <p class="txt p-0 m-0 text-light fw-bold fs-4">GoldStep</p>
                <p class="txt ps-5 p-0 m-0 text-light fs-4 ">Copyright 2024 PT.Goldstep Teknologi Indonesia</p>
            </div>
        </div>
    </div>


</body>

<script src="js/bootstrap.min.js"></script>

</html>