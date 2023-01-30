@extends('layouts.app')

@section('content')
<link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">

<body>
    @if (Auth::user()->role_as == '1')
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-database"> </i>
                                Statistics
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-edit"></i>
                                Projects
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User
                                                Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button"
                                        class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="index.html" class="mm-active">
                                    <i class=""></i>
                                    Dashboard
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Orders</div>
                                        <div class="widget-subheading">Last year expenses</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>1896</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Clients</div>
                                        <div class="widget-subheading">Total Clients Profit</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>5</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Followers</div>
                                        <div class="widget-subheading">People Interested</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>46%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-premium-dark">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Products Sold</div>
                                        <div class="widget-subheading">Revenue streams</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span>$14M</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Data pesanan
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="active btn btn-focus">Last Week</button>
                                            <button class="btn btn-focus">All Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Tanggal Masuk</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Jenis Laundry</th>
                                                <th class="text-center">Layanan</th>
                                                <th class="text-center">Status pesanan</th>
                                                <th class="text-center">Status pembayaran</th>
                                                <th class="text-center">Total bayar</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$product->tanggal}}</td>
                                                <td>{{$product->owner->alamat}}</td>
                                                <td>{{$product->jenis->nama_jenis}}</td>
                                                <td>{{$product->category->nama_layanan}}</td>
                                                <td>{{$product->status->nama_status}}</td>
                                                <td>{{$product->pembayaran->nama_pembayaran}}</td>
                                                <td><strong>Rp.</strong>
                                                    {{number_format($product->berat * $product->category->harga + $product->jenis->harga, 2)}}
                                                </td>
                                                <td>
                                                    <form action="{{ route('destroy', $product->id) }}" method="post">
                                                        <a href="{{ route('show',$product->id) }}"
                                                            class="btn btn-info">Show</a>
                                                        <a href="{{ route('edit', $product->id) }}"
                                                            class="btn btn-primary">Edit</a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                        Sales Report
                                    </div>
                                    <ul class="nav">
                                        <li class="nav-item"><a href="javascript:void(0);"
                                                class="active nav-link">Last</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);"
                                                class="nav-link second-tab-toggle">Current</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-eg-77">
                                            <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div
                                                        class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                        <canvas id="canvas"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6
                                                class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                Top Authors</h6>
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <ul
                                                        class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src=""
                                                                            alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry
                                                                        </div>
                                                                        <div class="widget-subheading">Web Developer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src=""
                                                                            alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading">UI Designer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src=""
                                                                            alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Vinnie Wagstaff
                                                                        </div>
                                                                        <div class="widget-subheading">Java Programmer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>429</span>
                                                                            <small class="text-warning pl-2">
                                                                                <i class="fa fa-dot-circle"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src=""
                                                                            alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ella-Rose Henry
                                                                        </div>
                                                                        <div class="widget-subheading">Web Developer
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>129</span>
                                                                            <small class="text-danger pl-2">
                                                                                <i class="fa fa-angle-down"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <img width="42" class="rounded-circle" src=""
                                                                            alt="">
                                                                    </div>
                                                                    <div class="widget-content-left">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading">UI Designer</div>
                                                                    </div>
                                                                    <div class="widget-content-right">
                                                                        <div class="font-size-xlg text-muted">
                                                                            <small class="opacity-5 pr-1">$</small>
                                                                            <span>54</span>
                                                                            <small class="text-success pl-2">
                                                                                <i class="fa fa-angle-up"></i>
                                                                            </small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                        Bandwidth Reports
                                    </div>
                                    <div class="btn-actions-pane-right">
                                        <div class="nav">
                                            <a href="javascript:void(0);"
                                                class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab
                                                1</a>
                                            <a href="javascript:void(0);"
                                                class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab
                                                2</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="tab-eg-55">
                                        <div class="widget-chart p-3">
                                            <div style="height: 350px">
                                                <canvas id="line-chart"></canvas>
                                            </div>
                                            <div class="widget-chart-content text-center mt-5">
                                                <div class="widget-description mt-0 text-warning">
                                                    <i class="fa fa-arrow-left"></i>
                                                    <span class="pl-1">175.5%</span>
                                                    <span class="text-muted opacity-8 pl-1">increased server
                                                        resources</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2 card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">63%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Generated Leads
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div
                                                                    class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-danger"
                                                                        role="progressbar" aria-valuenow="63"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 63%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">32%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Submitted Tickers
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div
                                                                    class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" aria-valuenow="32"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 32%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">71%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Server Allocation
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div
                                                                    class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" aria-valuenow="71"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 71%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="widget-content">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-numbers fsize-3 text-muted">41%
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="text-muted opacity-6">Generated Leads
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-progress-wrapper mt-1">
                                                                <div
                                                                    class="progress-bar-sm progress-bar-animated-alt progress">
                                                                    <div class="progress-bar bg-warning"
                                                                        role="progressbar" aria-valuenow="41"
                                                                        aria-valuemin="0" aria-valuemax="100"
                                                                        style="width: 41%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Orders</div>
                                            <div class="widget-subheading">Last year expenses</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-success">1896</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Products Sold</div>
                                            <div class="widget-subheading">Revenue streams</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning">$3M</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Followers</div>
                                            <div class="widget-subheading">People Interested</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger">45,9%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Income</div>
                                            <div class="widget-subheading">Expected totals</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-focus">$147</div>
                                        </div>
                                    </div>
                                    <div class="widget-progress-wrapper">
                                        <div class="progress-bar-sm progress-bar-animated-alt progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                        </div>
                                        <div class="progress-sub-label">
                                            <div class="sub-label-left">Expenses</div>
                                            <div class="sub-label-right">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Active Users
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="active btn btn-focus">Last Week</button>
                                            <button class="btn btn-focus">All Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Nama</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Telp</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pelanggan as $data)
                                            <tr>
                                                <td class="text-center text-muted">#{{$data->id}}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src=""
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{$data->nama}}</div>
                                                                <div class="widget-subheading opacity-7">Customers
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{$data->alamat}}</td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">{{$data->telp}}</div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1"
                                                        class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Complaint
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="active btn btn-focus">Last Week</button>
                                            <button class="btn btn-focus">All Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th>Nama pemesan</th>
                                                <th class="text-center">Keluhan</th>
                                                <th class="text-center">Foto</th>
                                                <th class="text-center">Saran & kritik</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($complaint as $data)
                                            <tr>
                                                <td class="text-center text-muted">#{{$data->id}}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{$data->nama_pemesan}}</div>
                                                                <div class="widget-subheading opacity-7">Customers
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{$data->keluhan}}</td>
                                                <td class="text-center">
                                                    <img src="konfir/{{$data->foto}}" alt="" width="180px">
                                                </td>
                                                <td class="text-center">{{$data->saran}}</td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1"
                                                        class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Orderan selesai
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="active btn btn-focus">Last Week</button>
                                            <button class="btn btn-focus">All Month</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Nama</th>
                                                <th class="text-center">Alamat</th>
                                                <th class="text-center">Tanggal</th>
                                                <th class="text-center">Status Pesanan</th>
                                                <th class="text-center">Status Pembayaran</th>
                                                <th class="text-center">Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($finish as $data)
                                            <tr>
                                                <td class="text-center text-muted">#{{$data->id}}</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src=""
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">{{ $data->owner->nama }}</div>
                                                                <div class="widget-subheading opacity-7">Customers
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{ $data->tanggal }}</td>
                                                <td class="text-center">{{ $data->owner->alamat }}</td>
                                                <td class="text-center">{{ $data->status->nama_status }}</td>
                                                <td class="text-center">{{ $data->pembayaran->nama_pembayaran }}</td>
                                                <td class="text-center">
                                                Rp.
                                                {{ number_format($data->berat * $data->category->harga + $data->jenis->harga, 2) }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        aria-valuenow="71" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 71%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Income Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 54%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Expenses Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 32%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Spendings Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left pr-2 fsize-1">
                                                <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                            </div>
                                            <div class="widget-content-right w-100">
                                                <div class="progress-bar-xs progress">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 89%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content-left fsize-1">
                                            <div class="text-muted opacity-6">Totals Target</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
