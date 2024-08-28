<?php
//session_start();

// Check if user is logged in and has the 'bendahara' role
//if (!isset($_SESSION['id']) || $_SESSION['role'] !== 'bendahara') {
//    header("Location:login.php");
//    exit();
//}

//include 'koneksi.php';
include 'header.php';
?>
<div class="full" style="background-image: url(./assets/asset2.jpg);">
    <div class="overlay"></div> <!-- Overlay untuk efek gelap pada background -->
    <div class="content-container">
        <div class="text-content">
            <h1>SELAMAT DATANG</h1>
            <h2>DI PERUMAHAN ASITCOM</h2>
            <h6>Temukan Hunian Sesuai Impian</h6>
            <a href="#more-info" class="cta-button">Lihat Lebih Lanjut</a> <!-- Call to Action -->
        </div>
        <div class="location-info">
            <p>Terletak di kawasan yang strategis, hanya 10 menit dari pusat kota.</p>
        </div>
    </div>
</div>

<div class="container mt-5 fade-in">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="./assets/asset1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">MODEL TERBAIK</h5>
                    <p class="card-text">Terdapat banyak model yang terbaik sesuai keinginan anda.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./assets/asset4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">LINGKUNGAN NYAMAN</h5>
                    <p class="card-text">Dibangun dengan lingkungan yang nyaman untuk anda.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="./assets/asset1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">FASILITAS LENGKAP</h5>
                    <p class="card-text">Disediakan juga fasilitas yang lengkap untuk anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 border-bottom fade-in">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-sm-12 col-lg-6">
            <h1>Properti Populer</h1>
        </div>
        <div class="col-sm-12 col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ornare mi ac sapien vulputate iaculis.</p>
        </div>
    </div>
</div>

<div class="container mt-3 fade-in">
    <div class="row justify-content-center align-items-center g-2 border-bottom">
        <div class="col">
            <h3>Perumahan Rakyat</h3>
        </div>
        <div class="col d-flex justify-content-end">
            <a href="#more-info" class="btn btn-warning">Selengkapnya</a>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/perumrakyat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">PERUMAHAN RAKYAT - Type 1</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>1</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 150.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/perumrakyat1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">PERUMAHAN RAKYAT - Type 2</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>1</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 200.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/perumrakyat2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">PERUMAHAN RAKYAT - Type 3</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>1</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 230.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 fade-in">
    <div class="row justify-content-center align-items-center g-2 border-bottom">
        <div class="col">
            <h3>Perumahan Komersial</h3>
        </div>
        <div class="col d-flex justify-content-end">
            <a href="#more-info" class="btn btn-warning">Selengkapnya</a>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/asset1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">KOMERSIAL - Type 1</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>3</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 320.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/asset2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">KOMERSIAL - Type 2</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>3</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 360.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/asset3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">KOMERSIAL - Type 3</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>3</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 390.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3 fade-in">
    <div class="row justify-content-center align-items-center g-2 border-bottom">
        <div class="col">
            <h3>Apartemen</h3>
        </div>
        <div class="col d-flex justify-content-end">
            <a href="#more-info" class="btn btn-warning">Selengkapnya</a>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/apartment.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">APARTEMEN - Type 1</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>1</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>1</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 100.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/apartment1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">APARTEMEN - Type 2</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 120.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="./assets/apartment2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">APARTEMEN - Type 3</h5>
                            <div
                                class="row justify-content-center align-items-center g-2">
                                <div class="col d-flex">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span> Kalidoni, Palembang
                                </div>
                            </div>
                            <div
                                class="row mt-2 justify-content-center align-items-center g-2">
                                <div class="col-2 d-flex">
                                    <span class="material-symbols-outlined">
                                        bed
                                    </span>
                                    <h6>3</h6>
                                </div>
                                <div class="col-2 d-flex"><span class="material-symbols-outlined">
                                        bathtub
                                    </span>
                                    <h6>2</h6>
                                </div>
                                <div class="col d-flex">
                                    <h6>Rp. 150.000.000,-</h6>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row mt-2  align-items-center g-2">
                            <div class="col d-flex justify-content-center" style="color: orange;">
                                <a href="" style="color: orange; text-decoration:none">Lihat Detail</a>
                                <span style="color: orange;" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 border-bottom fade-in">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-sm-12 col-lg-6">
            <h1>Marketing Kami</h1>
        </div>
        <div class="colcol-sm-12 col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ornare mi ac sapien vulputate iaculis.</p>
        </div>
    </div>
</div>

<div class="mt-3 bg-black" style="width: 100%;">
    <div class="container" style="color: white;">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-lg-4 col-sm-12  d-flex justify-content-end">
                <img src="./assets/person.png" class="card-img-top" alt="..." style="max-width: 100%;">
            </div>
            <div class="col-lg-8 col-sm-12 ">
                <h3>AJI ANGRI AWAN</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ornare mi ac sapien vulputate iaculis.</p>
                <p>Hubungi di:</p>
                <h4>WA/TELP : 0878-1323-3775</h4>
            </div>
        </div>
    </div>
</div>

<div class="mt-3 bg-black" style="width: 100%;">
    <div class="container" style="color: white;">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-sm-12 col-lg-8">
                <h3>RACHEL</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ornare mi ac sapien vulputate iaculis.</p>
                <p>Hubungi di:</p>
                <h4>WA/TELP : 0878-1323-3775</h4>
            </div>
            <div class="col-lg-4 col-lg-4 d-flex justify-content-start">
                <img src="./assets/person1.png" class="card-img-top" alt="..." style="max-width: 100%;">
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>