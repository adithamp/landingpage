<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="asset">

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
                    <a class="nav-link active" aria-current="page" href="/home">Beranda</a>
                    <a class="nav-link" href="/solusi">Solusi</a>
                    <a class="nav-link" href="#">TentangKami</a>
                </div>
            </div>
        </div>
    </nav>
        <div class="">
        <main>
            <?=$this->renderSection('content')?>
        </main>
        </div>

    <div class="col-12 mt-4">
        <div class="card" style="width: 100%;height: 200px; border: 1px solid rgb(229,234,239);">
            <div class="card-body d-flex">
                <div class="col-3">
                    <div class="col text-center">
                        <h5>PT GoldStep Indonesia.</h5>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="col-4 text-center">
                            <a href="">
                                <i class="ti ti-brand-whatsapp" style="font-size: 36px;color: #25D366;"></i>
                                <p class="ext-center text-dark-emphasis">WhatsApp</p>
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="">
                                <i class="ti ti-brand-instagram" style="font-size: 36px;color: #e1306c;"></i>
                                <p class="ext-center text-dark-emphasis">Instagram</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-9 d-flex justify-content-center">
                    <div class="col-4 text-end pe-3 pt-5">
                        <p>PT GoldStep Indonesia</p>
                    </div>
                    <p class="pt-5">|</p>
                    <div class="col-4 text-center pt-5">
                        <p>PtGoldstepIndonesia@gmail.com</p>
                    </div>
                    <p class="pt-5">|</p>
                    <div class="col-4 ps-3 pt-5">
                        <p>Taman Kopo Indah 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<script src="js/bootstrap.min.js"></script>

</html>