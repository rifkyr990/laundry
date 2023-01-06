@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <div class="col-sm-12 mt-5 text-center pt-5">
            <h2 class="fw-bold text-green">Konfirmasi Pembayaran</h2>
            <div class="custom-separator my-3 mb-5 mx-auto bg-brown"></div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Gagal</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @else

        @endif
        <form action="{{ route('addconfirm') }}" method="POST" enctype="multipart/form-data"
            class="w-75 d-block mx-auto">
            @csrf
            <div class="row">
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>ID pesanan</strong></p>
                        <input type="number" name="id_pesanan" id="" class="form-control" placeholder="ID Pesanan">
                    </div>
                </div>
                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Nama pengirim</strong></p>
                        <input type="text" name="nama_pengirim" id="" class="form-control" placeholder="Nama pengirim">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <p><strong>Bukti pembayaran</strong></p>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" multiple>
                </div>

                <div class="col-xs-12 my-sm-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('home') }}" class="btn btn-danger mx-2">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection
