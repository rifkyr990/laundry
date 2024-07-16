@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12 mt-5 pt-5">
        <h2 class="text-center fw-bold">Update Order</h2>
        <div class="custom-separator mx-auto my-2 bg-primary"></div>
        <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" id="" class="form-control" value="{{$product->owner->nama}}">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <textarea name="alamat" id="alamat" cols="30" rows="10"
                        class="form-control">{{$product->owner->alamat}}</textarea>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="category_id"><strong>Jenis Laundry</strong></label>
                    <select class="form-control" name="jenis_id" id="jenis_id">
                        @foreach ($jenis as $data)
                        <option value="{{$data->id}}" onkeyup="sum();">{{ $data->nama_jenis }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="status_pembayaran"><strong>Status pembayaran</strong></label>
                    <select class="form-control" name="status_pembayaran" id="status_pembayaran">
                        <option value="belum lunas">Belum lunas</option>
                        <option value="lunas">Lunas</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Tanggal</strong>
                    <input type="date" name="tanggal" id="" class="form-control" value="{{$product->tanggal}}">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Total berat/Kg</strong>
                    <input type="number" name="berat" id="berat" class="form-control" value="{{$product->berat}}">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="category_id"><strong>Jenis Layanan</strong></label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" onkeyup="sum();">{{ $category->nama_layanan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <label for="status_pesanan"><strong>Status pesanan</strong></label>
                    <select class="form-control" name="status_pesanan" id="status_pesanan">
                        @foreach ($status as $statuses)
                        <option value="{{$product->status->id}}">Pilih Status</option>
                        <option value="{{ $statuses->id }}" {{ $statuses->id == $data->status_id ? 'selected' : '' }}>
                            {{ $statuses->nama_status }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-sm-12 mt-5">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('product')}}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
