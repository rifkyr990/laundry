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
    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class="justify-content-center py-3">
        @csrf
        <div class="row mt-3">
            <div class="form-group col-sm-6 mb-3">
                <strong>Nama</strong>
                <input type="text" name="nama" id="" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <strong>Nomer Handphone</strong>
                <input type="number" name="telp" id="" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <strong>Alamat</strong>
                <textarea name="alamat" id="" cols="30" rows="8" class="form-control"></textarea>
            </div>
            <div class="form-group col-sm-6">
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label for="category_id"><strong>Jenis Laundry</strong></label>
                        <select class="form-select" name="jenis_id" id="jenis_id">
                            <option value="" selected>Pilih jenis laundry</option>
                            @foreach ($jenis as $data)
                            <option value="{{$data->id}}" onkeyup="sum();">{{ $data->nama_jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-sm-12 mb-3">
                        <strong>Tanggal</strong>
                        <input type="date" name="tanggal" id="" class="form-control">
                    </div>
                    <div class="form-group col-sm-12">
                        <strong>Total berat/Kg</strong>
                        <input type="number" name="berat" id="berat" class="form-control" onkeyup="sum();">
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-6 mt-2">
                <label for="category_id"><strong>Jenis Layanan</strong></label>
                <select class="form-select" name="category_id" id="category_id">
                    <option value="" selected>Pilih Jenis Layanan</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" onkeyup="sum();">{{ $category->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-6 mt-4 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/')}}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
</div>
<script>
    function sum() {
        let nilaiBerat = document.getElementById('berat').value;
        let nilaiLayanan = document.getElementById('category_id').value;
        let totalHarga = document.getElementById('total');

        if (!isNaN(result)) {
            totalHarga.value = result;
        }
    }

</script>
@endsection
