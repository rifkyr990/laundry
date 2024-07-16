@extends('layouts.app')

@section('content')
<body>
    @if (Auth::user()->role_as == '1')
    <div class="container-fluid">
        <div class="row">
        @include('partials.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-5">
                <div class="container mt-4">
                    <h2 class="mb-4">Pelanggan</h2>
                    <form action="{{ route('customer.search') }}" method="GET" class="mb-4">
                        <div class="row">
                            <div class="col-12 col-sm-8 mb-2 mb-sm-0">
                                <input type="text" name="query" class="form-control" placeholder="Masukan nama pelanggan" required>
                            </div>
                            <div class="col-12 col-sm-4">
                                <button type="submit" class="btn btn-primary w-100">Search</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Telp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($owners as $index => $data)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $data->id_owners }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->telp }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>
                                        <form action="{{ route('hapus', $data->id) }}" method="post">
                                            <a href="{{ route('owner.show', $data->id) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Detail</a>
                                            <a href="{{ route('owner.edit', $data->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>

                                            @csrf 
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Nama pelanggan tidak ada.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="fixed-bottom-right">
                    <a href="{{ route('owner.create') }}" class="btn btn-primary btn-lg rounded-circle">+</a>
                </div>
            </main>
        </div>
    </div>
    @else
    <div class="container mt-5">
        <div class="container">
            <div class="text-center d-flex justify-content-center w-100 flex-column vh-100">
                <div class="row main mx-auto py-5 px-4" style="width: 500px;">
                    <img src="{{ asset('assets/image/notfound.svg') }}" alt="notfound" width="100px">
                    <h2 class="fw-bold mt-3">Error not found</h2>
                </div>
            </div>
        </div>
    </div>
    @endif
</body>
@endsection
