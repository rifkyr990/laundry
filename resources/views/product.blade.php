@extends('layouts.app')

@section('content')

<div class="container mt-5">
    @if (Auth::user()->role_as == '1')
    <h2 class="text-center fw-bold py-5">Data Orderan</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <td scope="col">No</td>
                <td scope="col"width="150">Tanggal Masuk</td>
                <td scope="col" width="400">Alamat</td>
                <td scope="col" width="150">Jenis Laundry</td>
                <td scope="col" width="150">Layanan</td>
                <td scope="col" width="150">Status pesanan</td>
                <td scope="col" width="150">Status pembayaran</td>
                <td scope="col" width="200">Total bayar</td>
                <td scope="col" width="300">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{$product->tanggal}}</td>
                <td>{{$product->owner->alamat}}</td>
                <td>{{$product->jenis->nama_jenis}}</td>
                <td>{{$product->category->nama_layanan}}</td>
                <td>{{$product->status->nama_status}}</td>
                <td>{{$product->pembayaran->nama_pembayaran}}</td>
                <td><strong>Rp.</strong>
                    {{number_format($product->berat * $product->category->harga + $product->jenis->harga, 2)}}</td>
                <td>
                    <form action="{{ route('destroy', $product->id) }}" method="post">
                        <a href="{{ route('show',$product->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('edit', $product->id) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="container">
        <div class="text-center d-flex justify-content-center w-100 flex-column vh-100">
            <div class="row main mx-auto py-5 px-4" style="width: 500px;">
            <img src="{{ asset('assets/image/notfound.svg') }}" alt="notfound" width="100px">
            <h2 class="fw-bold mt-3">Error not found</h2>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
