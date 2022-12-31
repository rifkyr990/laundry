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
    <section class="method-payment py-2">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
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
                        <div class="d-flex flex-column ml-3 mx-2"> <span class="business fw-bold">Rifky Ramadhan</span> <span
                                class="plan">0895 3944 77132</span> </div>
                    </div>
                    <div> <input type="text" class="form-control cvv" placeholder="CVC" hidden> </div>
                </div>
                <div class="credit rounded mt-2 d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center"> <img src="{{ asset('assets/image/shopee.svg') }}"
                            class="rounded" width="110">
                        <div class="d-flex flex-column ml-3 mx-2"> <span class="business fw-bold">Rifky Ramadhan</span> <span
                                class="plan">0895 3944 77132</span> </div>
                    </div>
                    <div> <input type="text" class="form-control cvv" placeholder="CVC" hidden> </div>
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
                    <button class="btn btn-primary btn-block payment-button"><a href="https://wa.me/0895394477132"
                            class="text-light text-decoration-none">Konfirmasi Pembayaran <i
                                class="fa fa-long-arrow-right"></i></a></button>
                    <button class="btn btn-danger btn-block payment-button mx-2"><a href="{{ url('home') }}"
                            class="text-light text-decoration-none">Selesa <i
                                class="fa fa-long-arrow-right"></i></a></button></div>
            </div>
        </div>
    </section>
</body>

</html>
@endsection