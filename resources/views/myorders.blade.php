@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center fw-bold mt-5 pt-5">Pesanan Selesai</h2>
    <div class="custom-separator mx-auto my-2 mb-4 bg-primary"></div>


    <div class="row">
        @foreach($finishes as $data)
            <div class="col-sm-4">
                <div class="bg-light shadow-sm pt-4 px-4 my-5">
                    <ul style="list-style: none; padding:0;">
                    
                        <form action="{{ route('finishorder', $data->id) }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <li><Strong>ID Pesanan : {{ $data->id }}</Strong></li>
                            <li><b>Nama :</b> {{ $data->owner->nama }}</li>
                            <li><b>Alamat :</b> {{ $data->owner->alamat }}</li>
                            <li><b>Tanggal Order :</b> {{ $data->tanggal }}</li>
                            <li><b>Status Orderan :</b> {{ $data->status->nama_status }}</li>
                            <li><b>Status pembayaran :</b> {{ $data->pembayaran->nama_pembayaran }}</li>
                            <li><b>Total harga :</b> Rp.
                                {{ number_format($data->berat * $data->category->harga + $data->jenis->harga, 2) }}
                            </li>

                            <div class="d-flex justify-content-end mt-3 pb-3">
                                <a href="{{url('complaint')}}" class="btn btn-danger mx-2">Complaint</a>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
