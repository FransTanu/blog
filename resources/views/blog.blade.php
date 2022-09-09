<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Belajar Bootstrap</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top">
        <div class="container">
            <a class="navbar-brand">Belajar Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pembuat</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Hosting</a></li>
                            <li><a class="dropdown-item" href="#">Domain</a></li>
                            <li><a class="dropdown-item" href="#">Website</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 500px">
                <img src="{{ url('/image/carousel1.jpg') }}" class="d-block w-100" alt="carousel1"
                    style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 500px">
                <img src="{{ url('/image/carousel2.jpg') }}" class="d-block w-100" alt="carousel2"
                    style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 500px">
                <img src="{{ url('/image/carousel3.jpg') }}" class="d-block w-100" alt="carousel3"
                    style="height: 500px">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- Jumbotron-->
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Bootstrap</h1>
            <p class="col-md-8 fs-4">Apa Keunggulan Bootstrap ?</p>
            <p class="col-md-8 fs-4">Menciptakan website Mobile Friendly</p>
            <p class="col-md-8 fs-4">Memudahkan resize gambar</p>
            <p class="col-md-8 fs-4">Menambahkan elemen website tanpa ribet</p>
            <p class="col-md-8 fs-4">Membuat website lebih interaktif</p>
        </div>
    </div>
    <!--End Jumbotron-->

    <!--Card-->
    <section id="card">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img src="{{ url('/image/html.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Apa itu HTML ?</h5>
                            <p class="card-text">HTML adalah bahasa yang digunakan untuk membuat halaman web</p>
                            <a href="https://id.wikipedia.org/wiki/HTML" class="btn btn-primary">Baca Artikel</a>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-center">
                        <img src="{{ url('/image/css.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Apa itu CSS ?</h5>
                            <p class="card-text">CSS adalah salah satu bahasa yang wajib Anda ketahui saat belajar
                                membuat website. Tanpanya, tampilan website akan kurang menarik, dan perlu upaya lebih
                                untuk melakukan perubahan pada elemen tampilan.</p>
                            <a href="https://id.wikipedia.org/wiki/Cascading_Style_Sheets"
                                class="btn btn-primary">Baca Artikel</a>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-end">
                        <img src="{{ url('/image/php.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Apa itu PHP ?</h5>
                            <p class="card-text">PHP adalah bahasa pemrograman yang umum dipakai dalam pembuatan dan
                                pengembangan suatu web. Sebetulnya, dilansir dari PHP.net, PHP merupakan singkatan dari
                                PHP: Hypertext Prepocessor.</p>
                            <a href="https://id.wikipedia.org/wiki/PHP" class="btn btn-primary">Baca Artikel</a>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End card-->

    <!--Footer-->
    <footer class="bg-primary text-center">
        <p>Author: Frans Tanubrata</p>
        <p><a href="mailto:Franstan1112@gmail.com" class="text-white">Franstan1112@gmail.com</a></p>
    </footer>
    <!--End Footer-->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
