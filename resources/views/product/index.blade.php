@extends('layouts.app')

@section('content')

<body>
    @if (Auth::user()->role_as == '1')
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
                            <a class="nav-link bg-primary text-light" href="{{ route('product') }}">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('owner') }}">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('layanan') }}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('report') }}">Reports</a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main role="main" class="col-12 col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-5">
                <div class="container mt-4">
                    <h2 class="mb-4">Pesanan</h2>
                    <form method="GET" action="{{ route('product') }}">
                        <div class="row mb-3">
                            <div class="col-12 col-md-4 mb-2 mb-md-0">
                                <label for="date">Tanggal:</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="{{ Request::get('date')}}">
                            </div>
                            <div class="col-12 col-md-4 mb-2 mb-md-0">
                                <label for="status_id">Status:</label>
                                <select class="form-control" id="status_id" name="status_id">
                                    <option value="">Pilih Status</option>
                                    @foreach ($statuses as $data)
                                    <option value="{{$data->id}}">{{ $data->nama_status }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-4 d-flex align-items-end">
                                <button class="btn btn-primary w-100" type="submit">Filter</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{ route('product.search') }}" method="GET" class="mb-4">
                        <div class="row">
                            <div class="col-12 col-sm-8 mb-2 mb-sm-0">
                                <input type="text" name="order_id" class="form-control" placeholder="Enter Order ID"
                                    required>
                            </div>
                            <div class="col-12 col-sm-4">
                                <button type="submit" class="btn btn-primary w-100">Search</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $data)
                                <tr>
                                    <th scope="row">{{ $data->id }}</th>
                                    <td>{{ $data->order_id }}</td>
                                    <td>{{ $data->owner?->nama }}</td>
                                    <td>{{number_format($data->total)}}</td>
                                    <td>
                                        @if ($data->status->id == 1)
                                        <a href="{{ route('setStatus', $data->id) }}?status_id=2"
                                            class="btn btn-danger btn-sm">Proses</a>
                                        @elseif ($data->status->id == 2 && $data->pembayaran->id == 1)
                                        <a href="{{ route('setStatus', $data->id) }}?status_id=3"
                                            class="btn btn-warning btn-sm disabled">Selesai</a>
                                        @elseif ($data->status->id == 2 && $data->pembayaran->id == 2)
                                        <a href="{{ route('setStatus', $data->id) }}?status_id=3"
                                            class="btn btn-warning btn-sm">Selesai</a>
                                        @else
                                        <a href="" class="btn btn-success btn-sm">Diambil</a>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('destroy', $data->id) }}" method="post">
                                            <a href="{{ route('kirimnota', $data->id) }}"
                                                class="btn btn-success btn-sm">Kirim</a>
                                            <a href="{{ route('product.show', $data->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                            <a href="{{ route('product.edit', $data->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="form btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- Pagination links --}}
                    <div class="pagination">
                        {{ $products->links() }}
                    </div>
                    <div class="fixed-bottom-right">
                        <a href="{{ route('product.create') }}" class="btn btn-primary btn-lg rounded-circle">+</a>
                    </div>
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
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js">
    </script>
</body>
@endsection
