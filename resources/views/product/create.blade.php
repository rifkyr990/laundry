@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center fw-bold mt-5 pt-5">Input Order</h2>
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
    <form action="{{ route('tambah') }}" method="post" enctype="multipart/form-data"
        class="justify-content-center py-3">
        @csrf
        <div class="row mt-3">
            <div class="form-group col-sm-6 mb-3">
                <div class="row">
                    <div class="form-group col-sm-12 my-2">
                        <label for="owner_id"><strong>Pelanggan</strong></label>
                        <select class="form-select js-example-basic-multiple" name="owner_id" id="owner_id" require>
                            @foreach ($owner as $data)
                            <option value="{{$data->id}}" onkeyup="sum();">{{ $data->nama }} - {{ $data->telp }}
                            </option>
                            @endforeach
                        </select>
                        <span>* klik untuk pelanggan baru <a href="{{ route('owner.create') }}">Registrasi</a></span>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-6 mb-3">
                <div class="row">
                    <div class="form-group- col-sm-12 my-2">
                        <div class="form-group col-sm-12 my-2">
                            <label for="jenis_id"><strong>Tambahan Item *optional</strong></label>
                            <select class="js-example-basic-multiple form-select" name="jenis_id[]" id="jenis_id"
                                multiple="multiple">
                                @foreach ($jenis as $data)
                                <option value="{{$data->id}}">{{ $data->nama_jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-6">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <strong>Total berat/Kg</strong>
                        <input type="number" name="berat" id="berat" class="form-control" onkeyup="sum();">
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="tanggal_masuk" class="fw-bold">Tanggal Masuk:</label>
                        <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control"
                            value="{{ now()->toDateString() }}" readonly>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-6 my-2">
                <label for="category_id"><strong>Jenis Layanan:</strong></label>
                <select class="form-select" name="category_id" id="category_id">
                    <option value="" selected>Pilih Jenis Layanan</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" onkeyup="sum();">{{ $category->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-6 my-2">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <label for="tanggal_selesai" class="fw-bold">Tanggal Selesai:</label>
                        <input type="date" id="tanggal_selesai" class="form-control" name="tanggal_selesai"
                            value="{{ isset($category) ? now()->addDays($category->estimasi)->toDateString() : '' }}"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="col-sm-12" hidden>
                <div class="form-group">
                    <label for="status_pembayaran"><strong>Status pembayaran</strong></label>
                    <select class="form-control" name="status_pembayaran" id="status_pembayaran">
                        <option value="belum lunas" selected>Belum lunas</option>
                        <option value="lunas">Lunas</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-sm-12 mt-4 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('product')}}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection