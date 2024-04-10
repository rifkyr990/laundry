@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h2 class="fw-bold text-center">Tracking Order</h2>
    <form action="{{ route('track.order') }}" method="post">
        @csrf
        <div class="d-flex justify-content-center mt-5">
            <input type="text" class="form-control w-50" id="order_id" name="order_id">
            <button type="submit" class="btn btn-primary mx-2">Lacak</button>
        </div>
    </form>

    @if(isset($product))
    @if($product)
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Nama :</strong>
                        <p>{{ $product->owner->nama }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Alamat :</strong>
                        <p>{{ $product->owner->alamat }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Jenis laundry :</strong>
                        <p>{{ $product->jenis->nama_jenis }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Layanan :</strong>
                        <p>{{ $product->category->nama_layanan }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Status :</strong>
                        <p>{{ $product->status->nama_status }}</p>
                    </div>
                    <div class="col-md-6">
                        <strong>Total Harga :</strong>
                        <p>Rp.
                            {{ number_format($product->berat * $product->category->harga + $product->jenis->harga, 2) }}
                        </p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>

</div>
@else
<div class="mt-4 d-block mx-auto">
    <p>Pesanan tidak ditemukan.</p>
</div>
@endif
@endif
</div>
@endsection
