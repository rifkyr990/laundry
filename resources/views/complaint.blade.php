@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <div class="col-sm-12 mt-5 text-center pt-5">
            <h2 class="fw-bold text-green">Komplen Pengguna</h2>
            <div class="custom-separator mx-auto my-2 mb-4 bg-primary"></div>
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
        <form action="{{ route('addcomplaint') }}" method="POST" enctype="multipart/form-data"
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
                        <p><strong>Nama pemesan</strong></p>
                        <input type="text" name="nama_pemesan" id="" class="form-control" placeholder="Nama pemesan">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Keluhan</strong></p>
                        <input type="text" name="keluhan" id="" class="form-control" placeholder="Keluhan">
                    </div>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <p><strong>Bukti keluhan</strong></p>
                    <input type="file" name="foto" id="foto" class="form-control" accept="image/*" multiple>
                </div>

                <div class="col-xs-12 my-sm-2">
                    <div class="form-group">
                        <p><strong>Saran & kritik</strong></p>
                        <input type="text" name="saran" id="" class="form-control" placeholder="Saran & kritik">
                    </div>
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
