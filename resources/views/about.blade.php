@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <section class="about-page">
            <div class="d-flex justify-content-center align-items-center vh-100">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('assets/image/laundry-header.png') }}"
                            class="card-img-top w-100">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="fw-bold">
                            <h2 class="fw-bold text-dark">Laundry</h2>
                            <p class="text-dark">
                                Laundry Express merupakan aplikasi pengenalan hewan, aplikasi ini ditujukan untuk
                                anak-anak
                                maupun dewasa yang memiliki keinginnan untuk mengenali suara hewan,aplikasi ini di
                                kembangkan oleh <strong>Rifky Ramadhan</strong> seorang <strong>Web Developer</strong>.
                                dan aplikasi ini dikembangkan sejak tanggal 12 Desember 2022 kemarin.
                            </p>
                            <a href="{{ route('create') }}"
                                class="css-button-rounded--green btn-block p-2 px-3 shadow-sm text-decoration-none text-center position-absolute"
                                data-aos="flip-down" data-aos-duration="1000" style="bottom: 210px;">Order Sekarang</a>
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Team About -->

        <section class="team-project">
            <h2 class="fw-bold text-center my-3">Team Project</h2>
            <div class="custom-separator my-4 mx-auto bg-primary"></div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="row mx-auto">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="bg-white rounded-sm shadow" data-aos="zoom-in" data-aos-duration="1000">
                            <img class="card-img-top" src="{{ asset('assets/image/aing.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body text-center mt-3">
                                <h5 class="card-title text-dark text-center fw-bold fs-4">Rifky Ramadhan</h5>
                                <p class="card-text text-dark text-center" style="font-size: 14px;">Fullstack Developer
                                </p>
                                <div class="pb-3">
                                    <button class="btn btn-danger rounded-circle" type="button">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button>
                                    <button class="btn btn-success rounded-circle" type="button">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                    <button class="btn btn-dark rounded-circle" type="button">
                                        <i class="fa-brands fa-github"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="bg-white rounded-sm shadow" data-aos="zoom-in" data-aos-duration="1000">
                            <img class="card-img-top" src="{{ asset('assets/image/aing.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body text-center mt-3">
                                <h5 class="card-title text-dark text-center fw-bold fs-4">Rifky Ramadhan</h5>
                                <p class="card-text text-dark text-center" style="font-size: 14px;">Fullstack Developer
                                </p>
                                <div class="pb-3">
                                    <button class="btn btn-danger rounded-circle" type="button">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button>
                                    <button class="btn btn-success rounded-circle" type="button">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                    <button class="btn btn-dark rounded-circle" type="button">
                                        <i class="fa-brands fa-github"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="bg-white rounded-sm shadow" data-aos="zoom-in" data-aos-duration="1000">
                            <img class="card-img-top" src="{{ asset('assets/image/aing.jpg') }}"
                                alt="Card image cap">
                            <div class="card-body text-center mt-3">
                                <h5 class="card-title text-dark text-center fw-bold fs-4">Rifky Ramadhan</h5>
                                <p class="card-text text-dark text-center" style="font-size: 14px;">Fullstack Developer
                                </p>
                                <div class="pb-3">
                                    <button class="btn btn-danger rounded-circle" type="button">
                                        <i class="fa-brands fa-instagram"></i>
                                    </button>
                                    <button class="btn btn-success rounded-circle" type="button">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                    <button class="btn btn-dark rounded-circle" type="button">
                                        <i class="fa-brands fa-github"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Team About -->

        <!-- Start footer -->

        <footer class="pt-4 my-md-5 pt-md-5 border-top" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        <img src="{{ asset('assets/image/logo.png') }}" width="150px">
                        <small class="d-block text-muted">&copy; 2017-2018</small>
                    </div>
                    <div class="col-4 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-4 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Resource</a></li>
                            <li><a class="text-muted" href="#">Resource name</a></li>
                            <li><a class="text-muted" href="#">Another resource</a></li>
                            <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- End Footer -->

    </div>
</body>

</html>
@endsection
