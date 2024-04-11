@extends('layouts.app')

@section('content')

<body class="overflow-hidden">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="mx-auto bg-light shadow-lg" style="width: 650px;">
                <div class="card">
                    <div class="card-header">
                    <h2 class="text-center fw-bold py-2">Detail Order</h2>
                    </div>
                    <div class="card-body">
                        <div class="px-4">
                            <strong>Nama :</strong>
                            <h2 class="fs-5">{{$product->owner->nama}}</h2>
                            <strong>Alamat :</strong>
                            <h2 class="fs-5">{{$product->owner->alamat}}</h2>
                            <strong>Jenis laundry :</strong>
                            <h2 class="fs-5">{{$product->jenis->nama_jenis}}</h2>
                            <strong>Layanan :</strong>
                            <h2 class="fs-5">{{$product->category->nama_layanan}}</h2>
                            <strong>Status pembayaran:</strong>
                            <h2 class="fs-5">{{$product->pembayaran->nama_pembayaran}}</h2>
                            <div class="my-3">
                                <strong>Total Harga :</strong>
                                <h2 class="fs-4 float-end fw-bolder">Rp.
                                    {{number_format($product->berat * $product->category->harga + $product->jenis->harga, 2)}}
                                </h2>
                            </div>
                        </div>
                        <form action="{{ route('cancel', $product->id) }}" method="post"
                            class="d-flex justify-content-end my-3 pt-3">
                            <a href="{{url('payment')}}" class="btn btn-primary mx-2">Lanjut pembayaran</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Back</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
