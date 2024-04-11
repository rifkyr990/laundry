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
    <form action="{{ route('owner.store') }}" method="post" enctype="multipart/form-data" class="justify-content-center py-3">
        @csrf
        <div class="row mt-3">
            <div class="form-group col-sm-6 mb-3">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label for="customer_id"><strong>Nama Pelanggan</strong></label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>

                </div>
            </div>

            <div class="form-group col-sm-6">
                <div class="row">
                    <div class="form-group col-sm-12 mb-3">
                        <label for="number"><strong>No.Telepon</strong></label>
                        <input type="number" name="telp" id="telp" class="form-control">
                    </div>
                </div>
                
            </div>
            <div class="col-sm-12 mb-3">
                    <label for="alamat"><strong>Alamat</strong></label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                </div>
            <div class="form-group col-sm-12 mt-4 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('owner')}}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
