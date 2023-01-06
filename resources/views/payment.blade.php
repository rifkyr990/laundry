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
    <section class="method-payment">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="card p-5">
                <div>
                    <h4 class="heading">Pembayaran</h4>
                    <p class="text">Silahkan memilih salah satu metode pembayaran dibawah ini, mohon melakukan
                        konfirmasi setelah pembayaran berhasil</p>
                </div>
                <span class="detail mt-3">Metode Pembayaran :</span>
                <div class="credit rounded mt-4 d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center"> <img src="{{ asset('assets/image/dana.png') }}"
                            class="rounded bg-transparent p-2 ml-5" width="110">
                        <div class="d-flex flex-column ml-3 mx-2"> <span class="business fw-bold">Rifky Ramadhan</span>
                            <span class="plan">0895 3944 77132</span> </div>
                    </div>
                    <div> <input type="button" class="form-control cvv" value="scan QR" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"> </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                <img class="d-block mx-auto" src="{{ asset('assets/image/dana-qr.jpg') }}" alt="" width="400px">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="credit rounded mt-2 d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center"> <img src="{{ asset('assets/image/shopee.svg') }}"
                            class="rounded" width="110">
                        <div class="d-flex flex-column ml-3 mx-2"> <span class="business fw-bold">Rifky Ramadhan</span>
                            <span class="plan">0895 3944 77132</span> </div>
                    </div>
                    <div> <input type="button" class="form-control cvv" value="scan QR" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"> </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                <img class="d-block mx-auto" src="{{ asset('assets/image/dana-qr.jpg') }}" alt="" width="400px">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="detail fs-5 mt-3">Atau bisa dengan :</span>
                <div class="credit rounded mt-3 d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash On Delivery
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <button class="btn btn-primary btn-block btn-md"><a href="{{route('confirm')}}"
                            class="text-light text-decoration-none">Konfirmasi Pembayaran <i
                                class="fa fa-long-arrow-right"></i></a></button>
                    <button class="btn btn-danger btn-block btn-md mx-2"><a href="{{ url('home') }}"
                            class="text-light text-decoration-none">Selesai <i
                                class="fa fa-long-arrow-right"></i></a></button></div>
            </div>
        </div>
    </section>
</body>

</html>
@endsection
