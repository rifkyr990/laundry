@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
</head>

<body>
    <!-- Landing  -->

    <section id="hero">
        <div class="container mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <h1>Let's laundry here Now <span>LaundryGo</span></h1>
                        <h2>Budayakan malas mencuci,karena mencuci merupakan tugas utama kami</h2>
                        <div class="text-center text-lg-start">
                            <a href="#service" class="btn-get-started scrollto text-decoration-none">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('assets/image/landing.png') }}" class="img-fluid animated" alt="gambar">
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>

    </section><!-- End Hero -->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center mt-5">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3 fa-5x"></i>
                                    <h3 class="font-alt">Device Mockups</h3>
                                    <p class="text-muted mb-0">Dapat digunakan oleh seluruh perangkat gadget</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-truck icon-feature text-gradient d-block mb-3 fa-5x"></i>
                                    <h3 class="font-alt">Free delivery</h3>
                                    <p class="text-muted mb-0">Gratis antar jemput maksimal 2km dari tempat laundry</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-5 mb-md-0">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-gift icon-feature text-gradient d-block mb-3 fa-5x"></i>
                                    <h3 class="font-alt">Kupon gratis</h3>
                                    <p class="text-muted mb-0">Dapatkan kupon atau voucher gratis setiap pemesanan</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-patch-check icon-feature text-gradient d-block mb-3 fa-5x"></i>
                                    <h3 class="font-alt">Open Source</h3>
                                    <p class="text-muted mb-0">Since this theme is MIT licensed, you can use it
                                        commercially!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                        <img src="{{ asset('assets/image/mockup.png') }}" alt="" width="300px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->

    <section class="pricing py-5 mt-5" id="service">
        <div class="container justify-content-center">
            <div class="d-block mx-auto">
                <h2 class="fw-bold fs-1 text-center">Services</h2>
                <div class="custom-separator mx-auto my-2 mb-4 bg-primary"></div>
                <p class="text-muted text-center fs-5 my-4">
                    berbagai jenis layanan kami sediakan, anda dapat memilih salah satu layanan yang sesuai dengan anda.
                    <br>
                    pilih salah satu layanan dibawah ini
                </p>
            </div>

            <div class="row">
                <!-- Pricing Table-->
                <div class="col-lg-4 mb-5 mb-lg-0 text-center" data-aos="fade-right" data-aos-duration="1000">
                    <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h6 text-uppercase font-weight-bold mb-4">Reguler</h1>
                        <h2 class="h1 font-weight-bold">Rp 4.500<span class="text-small font-weight-normal ml-2">/
                                services</span></h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left">
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Estimasi 2-3 hari</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Bebas memilih parfum</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Bisa delivery dan pickup</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Mendapat 1 kupon</li>
                        </ul>
                        <a href="{{ route('product.create') }}"
                            class="css-button-rounded--green btn-block p-2 shadow-sm w-75 text-decoration-none rounded-pill">Order
                            Sekarang</a>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0 text-center" data-aos="flip-up" data-aos-duration="1000">
                    <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h6 text-uppercase font-weight-bold mb-4">Expres</h1>
                        <h2 class="h1 font-weight-bold">Rp 6.500<span class="text-small font-weight-normal ml-2">/
                                services</span></h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left">
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Estimasi 3 jam</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Bebas memilih parfum</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Bisa delivery dan pickup</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Mendapat 1 kupon</li>
                        </ul>
                        <a href="{{ route('product.create') }}"
                            class="css-button-rounded--green btn-block p-2 shadow-sm w-75 text-decoration-none rounded-pill">Order
                            Sekarang</a>
                    </div>
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0 text-center" data-aos="fade-left" data-aos-duration="1000">
                    <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h6 text-uppercase font-weight-bold mb-4">One day service</h1>
                        <h2 class="h1 font-weight-bold">Rp 5.500<span class="text-small font-weight-normal ml-2">/
                                services</span></h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left">
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Estimasi 1 hari</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Bebas memilih parfum</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Bisa delivery dan pickup</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Mendapat 1 kupon</li>
                        </ul>
                        <a href="{{ route('product.create') }}"
                            class="css-button-rounded--green btn-block p-2 shadow-sm w-75 text-decoration-none rounded-pill">Order
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End pricing -->

    <!-- Start Article -->
    <section class="article-page mt-5 py-5" id="article">
        <div class="container">
            <div class="d-block mx-auto">
                <h2 class="fw-bold text-center fs-1">
                    Article
                </h2>
                <div class="custom-separator mx-auto my-2 mb-4 bg-primary"></div>
                <p class="text-muted text-center m-4 fs-5">
                    beberapa tips & trik yang sesuai dengan kebutuhan anda,anda dapat membaca artikel <br>
                    kami dan jelajahi seluruh isinya.
                </p>
            </div>
            <div class="row">
                @foreach ($articles as $data)
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="bg-white rounded-lg shadow" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="/assets/image/{{ $data->gambar }}" class="rounded-top" style="width: 100%;">
                        <div class="custom-separator my-4 mx-auto bg-primary"></div>
                        <div class="px-4 pb-4">
                            <div class="heading my-4">
                                <h2 class="fw-bold fs-4"><a href="{{ $data->link }}"
                                        class="text-decoration-none">{{ $data->judul }}</a></h2>
                            </div>
                            <div class="body-text text-muted">
                                <p class="card-text">
                                    {{ $data->isi_artikel }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Article -->

    <!-- Location -->
    <section class="maps-info my-5" id="location">
        <div class="container">
            <div class="d-block mx-auto">
                <h2 class="fw-bold text-center fs-1">
                    Location Info
                </h2>
            </div>
            <div class="custom-separator my-2 mb-3 mx-auto bg-primary"></div>
            <div class="d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.3116571143655!2d110.37155698681553!3d-7.8624173173700305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a571137136b55%3A0x59bb36bbcbc3cc0a!2s45%20Laundry!5e0!3m2!1sid!2sid!4v1671052030922!5m2!1sid!2sid"
                    width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" data-aos="zoom-in-up" data-aos-duration="1000"></iframe>
            </div>
        </div>
    </section>
    <!-- End location -->

    <!-- Footer -->

    <footer class="pt-4 my-md-5 pt-md-5 border-top" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <img src="{{ asset('assets/image/logo-fix.png') }}" width="150px">
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

    <!-- End footer -->
</body>

</html>
@endsection
