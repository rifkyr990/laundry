@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
    @include('partials.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-5">
            <div class="container mt-4">
                <h2 class="mb-4">Daftar Layanan</h2>
                <form method="post" action="{{ route('jenis.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="start_date">Jenis item :</label>
                            <input type="text" name="nama_jenis" id="nama_jenis" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="end_date">Harga :</label>
                            <input type="number" name="harga" id="harga" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <br />
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
                <hr>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama Jenis</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jenis as $data)
                            <tr>
                                <td>{{ $data->nama_jenis }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>
                                    <form action="{{ route('jenis.destroy', $data->id) }}" method="post">
                                        <a href="{{ route('layanan.edit', $data->id) }}"
                                            class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>  Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="form btn btn-danger btn-sm"><i class="bi bi-trash"></i>   Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="fixed-bottom-right">
                <a href="{{ route('layanan.create') }}" class="btn btn-primary btn-lg rounded-circle">+</a>
            </div>
        </main>
    </div>
</div>
@endsection
