@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12">
        <h2>Detail Order</h2>
        <strong>Nama :</strong>
        <h4 class="fw-bold">{{$product->owner->nama}}</h4>
        <strong>Alamat</strong>
        <h4 class="fw-bold">{{$product->owner->alamat}}</h4>
        <strong>Jenis laundry :</strong>
        <h4 class="fw-bold">{{$product->jenis->nama_jenis}}</h4>
        <strong>Layanan :</strong>
        <h4 class="fw-bold">{{$product->category->nama_layanan}}</h4>
        <strong>Status :</strong>
        <h4 class="fw-bold">{{$product->status->nama_status}}</h4>
        <strong>Total Harga :</strong>
        <h4 class="fw-bold">Rp. {{number_format($product->total)}}</h4>
        <div class="button">
            <a href="{{url('product')}}" class="btn btn-danger">Back</a>
        </div>
    </div>
</div>
@endsection