@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center fw-bold mt-5 pt-5">Pesanan Saya</h2>
    <div class="custom-separator mx-auto my-2 mb-4 bg-primary"></div>


    <div class="row">
        @foreach($products as $data)
        <div class="col-sm-4">
            <div class="bg-light shadow-sm pt-4 px-4 my-5">
                <ul style="list-style: none; padding:0;">
                    <li><Strong>ID Pesanan : {{ $data->id }}</Strong></li>
                    <li><b>Nama :</b> {{ $data->owner->nama }}</li>
                    <li><b>Alamat :</b> {{ $data->owner->alamat }}</li>
                    <li><b>Tanggal Order :</b> {{ $data->tanggal }}</li>
                    <li><b>Status Orderan :</b> {{ $data->status->nama_status }}</li>
                    <li><b>Status pembayaran :</b> {{ $data->pembayaran->nama_pembayaran }}</li>
                    <li><b>Total harga :</b> Rp.
                        {{ number_format($data->berat * $data->category->harga + $data->jenis->harga, 2) }}
                    </li>
                    
                    <div class="d-flex justify-content-end mt-3 pb-3">
                        <a href="" class="btn btn-primary mx-2" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Selesai</a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h2 class="text-center fs-5 fw-normal pt-3">Apakah anda yakin pesanan sudah selesai ?</h2>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('finishorder', $data->id) }}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" data-bs-dismiss="modal"
                                            class="btn btn-primary">Yes</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
