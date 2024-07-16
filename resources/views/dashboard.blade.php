@extends('layouts.app')
@section('content')

<body>
    @if (Auth::user()->role_as == '1')
    <div class="container-fluid">
        <div class="row">
            @include('partials.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-5">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-blue order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Pelanggan</h6>
                                    <h2 class="text-right"><i
                                            class="fa fa-cart-plus f-left"></i><span>{{$customerCount}}</span></h2>
                                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-green order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Pesanan Masuk</h6>
                                    <h2 class="text-right"><i
                                            class="fa fa-rocket f-left"></i><span>{{$unfinishedOrderCount}}</span></h2>
                                    <p class="m-b-0">Completed Orders<span
                                            class="f-right">{{$finishedOrderCount}}</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-yellow order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Orders Received</h6>
                                    <h2 class="text-right"><i class="fa fa-refresh f-left"></i><span>486</span></h2>
                                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-pink order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Orders Received</h6>
                                    <h2 class="text-right"><i class="fa fa-credit-card f-left"></i><span>486</span></h2>
                                    <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-auto bg-white rounded shadow">
                    {!! $chart->container() !!}
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
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</body>
@endsection