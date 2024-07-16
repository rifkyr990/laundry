@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center fw-bold mt-5 pt-5">Input Pelanggan</h2>
    <div class="custom-separator my-4 mx-auto bg-primary"></div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whopps</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('layanan.update', $category->id) }}" method="post" enctype="multipart/form-data"
        class="justify-content-center py-3">
        @csrf
        @method('PUT')
        <div class="row mt-3">
            <div class="form-group col-sm-6 mb-3">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label for="nama_layanan"><strong>Nama Layanan</strong></label>
                        <input type="text" name="nama_layanan" id="nama_layanan" class="form-control"
                            value="{{$category->nama_layanan}}">
                    </div>

                </div>
            </div>
            <div class="form-group col-sm-6 mb-3">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label for="estimasi"><strong>Estimasi</strong></label>
                        <input type="text" name="estimasi" id="estimasi" class="form-control"
                            value="{{$category->estimasi}}">
                    </div>

                </div>
            </div>
            <div class="form-group col-sm-6">
                <div class="row">
                    <div class="form-group col-sm-12 mb-3">
                        <label for="harga"><strong>Harga</strong></label>
                        <input type="number" name="harga" id="harga" class="form-control" value="{{$category->harga}}">
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-12 mt-4 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('owner')}}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
