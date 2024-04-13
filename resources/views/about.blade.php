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
                        <img src="{{ asset('assets/image/laundry-header.png') }}" class="card-img-top w-100">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="fw-bold">
                            <h2 class="fw-bold text-dark">About Apps</h2>
                            <p class="text-dark">
                                Laundry Express merupakan aplikasi pemesanan laundry berbasis website, aplikasi ini ditujukan untuk
                                ditujukan untuk memudahkan pemesanan laundry tanpa harus datang ke tempat,aplikasi ini di
                                buat sejak tanggal 12 Desember 2022 kemarin oleh <strong>Rifky Ramadhan</strong> seorang <strong>Web Developer</strong>.
                                selain itu dibalik jadinya aplikasi terdapat pemeran lain diantaranya ada <strong>Akbar pratama suryamin</strong> sebagai designer apps
                                serta <strong>Apridan husaen muharam</strong> sebagai data analyst system.
                            </p>
                            <a href=""
                                class="btn-order css-button-rounded--green btn-block p-2 px-3 shadow-sm text-decoration-none text-center position-absolute"
                                data-aos="flip-down" data-aos-duration="1000" style="bottom: 210px;">Order Sekarang</a>
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Team About -->
        <!-- End Team About -->

        <div class="py-5 team4">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-7 text-center">
                        <h3 class="mb-3">Experienced & Professional Team</h3>
                        <h6 class="subtitle">You can relay on our amazing features list and also our customer services
                            will be great experience for you without doubt and in no-time</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- column  -->
                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/image/aing.jpg') }}"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Rifky Ramadhan</h5>
                                    <h6 class="subtitle mb-3">Fullstack Developer</h6>
                                    <p>You can relay on our amazing features list and also our customer services will be
                                        great experience.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-messenger"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-github"></i></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->
                    <!-- column  -->
                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/image/akbar.jpg') }}"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Akbar Pratama Suryamin</h5>
                                    <h6 class="subtitle mb-3">Designer Apps</h6>
                                    <p>You can relay on our amazing features list and also our customer services will be
                                        great experience.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-messenger"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-github"></i></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->
                    <!-- column  -->
                    <div class="col-lg-3 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/image/apridan.jpg') }}"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Apridan husaeni muharam</h5>
                                    <h6 class="subtitle mb-3">Data Analyst System</h6>
                                    <p>You can relay on our amazing features list and also our customer services will be
                                        great experience.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-messenger"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i
                                                    class="bi bi-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block px-1"><i class="bi bi-github"></i></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->
                        <!-- Row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start footer -->

        <footer class="pt-4 my-md-5 pt-md-5 border-top" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        <img src="{{ asset('assets/image/logo.png') }}" width="150px">
                        <small class="d-block text-muted">&copy; 2022-2023</small>
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
