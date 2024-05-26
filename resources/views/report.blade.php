@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar mt-5 pt-4">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard') }}">
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('product') }}">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('owner') }}">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('layanan') }}">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-primary text-light" href="{{ route('report') }}">Reports</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-5">
            <div class="container mt-4">
                <h2 class="mb-4">Daftar Produk</h2>
                <form method="GET" action="{{ route('report') }}">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="start_date">Tanggal Awal:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date"
                                value="{{ request('start_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="end_date">Tanggal Akhir:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date"
                                value="{{ request('end_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label for="status_id">Status:</label>
                            <select class="form-control" id="status_id" name="status_id">
                                <option value="">Pilih Status</option>
                                @foreach ($statuses as $data)
                                <option value="{{$data->id}}">{{ $data->nama_status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <br />
                            <button class="btn btn-primary" type="submit">Filter</button>
                            <button type="submit" name="export" value="excel" class="btn btn-success">Download Excel</button>
                        </div>
                    </div>
                </form>
                <hr>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Status</th>
                                <th>Tanggal Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->order_id }}</td>
                                <td>{{ $product->owner?->nama }}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm">{{ $product->status->nama_status }}</a>
                                </td>
                                <td>{{ $product->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">Lihat</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- Pagination links --}}
                    <div class="pagination">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            <div class="fixed-bottom-right">
                <a href="{{ route('product.create') }}" class="btn btn-primary btn-lg rounded-circle">+</a>
            </div>
        </main>
    </div>
</div>
@endsection
