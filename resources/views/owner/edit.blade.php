@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-12">
        <h2 class="text-center fw-bold">Update Data Pelanggan</h2>

        <form action="{{ route('update', $owner->id) }}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" id="" class="form-control" value="{{$owner->nama}}">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Telp</strong>
                    <input type="text" name="telp" id="" class="form-control" value="{{$owner->telp}}">
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <textarea name="alamat" id="alamat" cols="30" rows="10"
                        class="form-control">{{$owner->alamat}}</textarea>
                </div>
            </div>

            <div class="col-sm-12 mt-5">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('owner')}}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
