@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12 pt-5">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title">Detail Order</h2>
                <hr>
                <div class="mb-3">
                    <strong>Nama :</strong>
                    <h4 class="fw-bold">{{$product->owner->nama}}</h4>
                </div>
                <div class="mb-3">
                    <strong>Alamat :</strong>
                    <h4 class="fw-bold">{{$product->owner->alamat}}</h4>
                </div>
                <div class="mb-3">
                    <strong>Jenis laundry :</strong>
                    <h4 class="fw-bold">{{$product->jenis->nama_jenis}}</h4>
                </div>
                <div class="mb-3">
                    <strong>Layanan :</strong>
                    <h4 class="fw-bold">{{$product->category->nama_layanan}}</h4>
                </div>
                <div class="mb-3">
                    <strong>Status :</strong>
                    <h4 class="fw-bold">{{$product->status->nama_status}}</h4>
                </div>
                <div class="mb-3">
                    <strong>Status Pembayaran:</strong>
                    <h4 class="fw-bold">{{$product->pembayaran->nama_pembayaran}}</h4>
                </div>
                <div class="mb-3">
                    <strong>Total Harga :</strong>
                    <h4 class="fw-bold">Rp. {{number_format($product->total)}}</h4>
                </div>
                <div class="mt-4">
                    <a href="{{url()->previous()}}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
