<?php 
require_once "app.php";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS WEBPROG</title>

    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Nunito+Sans:opsz,wght@6..12,200&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- END CDN Bootstrap -->

    <!-- CDN JQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
            integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="lib/jquery.waypoints.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- END CDN JQuery -->

</head>

<body>
<!-- ini bagian header -->
    <nav class="navbar navbar-expand-lg sticky fixed-top h-nav">
        <div class="container">
            <a href="tb_hiphop.php" class="navbar-brand">Hanum's Playlist Page</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarId" aria-controls="navbarId" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars hamburger"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarId">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="tb_hiphop.php" class="nav-link">List Playlist</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- ini bagian header -->
<header id="home">
    <div class="container-fluid header-content">
        <div class="row">
            <div class="col text-center">
                <div class="content-box">
                    <h4>Welcome to my Playlist page</h4>
                    <h1>Aku <span class="element"></span></h1>
                    <p></p>
                    <a href="tb_hiphop.php" class="btn">Get to know about me more and more</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ini bagian about -->
<section class="about h-p" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="/images/mind of mine.png" class="img-fluid img-thumbnail" alt="album picture">
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <h2>About My Favorite Singer</h2>
                <h2>Zayn Malik</h2>
                <h4><a href="https://music.youtube.com/playlist?list=PLjDDwQasqMdZFWcnoq0WdHVdu58hUzQQf&si=8GbdBQ-Z5SijRA_F" target="_blank">Some <span style="color: #E96f85;"></span> of his best song(s)</a></h4>
                <p>Zayn Malik (nama lengkap: Zain Javadd Malik) adalah seorang penyanyi dan penulis lagu berkebangsaan Inggris. Lahir pada 12 Januari 1993 di Bradford, Inggris, ia memiliki keturunan Inggris-Pakistan. Pada tahun 2010, Malik mengikuti audisi sebagai peserta solo di acara The X Factor. Setelah dieliminasi sebagai peserta solo, ia kembali bersama Harry Styles, Niall Horan, Liam Payne, dan Louis Tomlinson untuk membentuk grup One Direction. Malik keluar dari grup ini pada 2015 dan menandatangani kontrak solo dengan RCA Records. Album debutnya, “Mind of Mine” (2016), mencapai nomor satu di Inggris dan Amerika Serikat</p>
                <div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="https://www.instagram.com/zayn?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.youtube.com/channel/UC3PdiRW5dUA4V70ueeR1eHA"><i class="fa-brands fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a href="https://open.spotify.com/artist/5ZsFI1h6hIdQRw2ti0hz81"><i class="fa-brands fa-spotify"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ini bagian pengalaman -->
<section class="exp-class" id="exp-id">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <h1>Preferensi Genre</h1>
            </div>
            <div class="col-md-6">
                <label>Hip-hop</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <label>Rythm & Blues</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">65%</div>
                </div>
                <label>Jazz</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">40%</div>
                </div>
                <label>Pop</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ini bagian card -->
<section class="service-class bg-sec h-p" id="service-id">
    <div class="container text-center">
        <div class="row ">
            <div class="col">
                <div class="col">
                    <h1>Here some more information about me</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-tittle"><a href="https://www.instagram.com/hnumbhv/" style="text-decoration: none;">Personal Istagram</a></h3>
                        <div class="service-border"><img src="images/eazy-e.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa-brands fa-discord"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-tittle"><a href="https://discordapp.com/capallot/941952058154680340" style="text-decoration: none;">Personal Discord</a></h3>
                        <div class="service-border"><img src="images/iammusic.jpg" alt="" style="height: 225px;width:200px"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-tittle"><a href="https://music.youtube.com/playlist?list=PLjDDwQasqMdaycsaWR8h9smXsQs7CKj98&si=SIvKlFXoVaCF73iC" style="text-decoration: none;">Personal Playlist</a></h3>
                        <div class="service-border"><img src="images/playlist.png" alt="" style="height: 225px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>

