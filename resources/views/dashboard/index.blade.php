@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('css')
    <!-- jsvectormap css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

@section('page-title')
    <h3 class="page-title text-capitalize fw-medium fs-3xl"><span>Selamat Datang</span> <b>{{ @Auth::user()->name }}</b> 👋</h3>
    {{-- <p class="mb-0 page-sub-title">You had completed 68% from your monthly level, keep going to your level.</p> --}}
    {{-- <x-breadcrumb pagetitle="Dashonic" title="Sales Analytics" /> --}}
@endsection

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h6 class="text-success fs-xs float-end mb-0">
                    <i class="ph ph-trend-up fs-sm align-middle me-1"></i> +5.09 %
                </h6>
                <div>
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Penjualan</p>
                    <h4 class="fw-semibold mb-3">RP<span class="counter-value" data-target="21.548">0</span>.000 </h4>
                </div>

                <div id="total_revenue" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="text-success fs-xs float-end mb-0">
                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +12.07 %
                </h5>
                <div>
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Penghasilan</p>
                    <h4 class="fw-semibold mb-3">$<span class="counter-value" data-target="750.36">0</span>M </h4>
                </div>
                <div id="total_earnings" data-colors='["--tb-info"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h6 class="text-danger fs-xs float-end mb-0">
                    <i class="ph ph-trend-down fs-sm align-middle me-1"></i> -07.18 %
                </h6>
                <div>
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Rata Rata Penjualan Harian</p>
                </div>
                <div id="average_daily_sales" data-colors='["--tb-secondary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h6 class="text-danger fs-xs float-end mb-0">
                    <i class="ph ph-trend-down fs-sm align-middle me-1"></i> -01.45 %
                </h6>
                <div>
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Pesanan</p>
                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="8745">0</span> </h4>
                </div>

                <div id="total_orders" data-colors='["--tb-primary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-8">
        <div class="card" id="chart">
            <div class="card-header border-0 align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Grafik Penjualan</h4>
                <div class="toolbar">
                    <button id="one_month" type="button" class="btn btn-sm btn-subtle-secondary">1 BULAN</button>
                    <button id="three_months" type="button" class="btn btn-sm btn-subtle-secondary">3 BULAN</button>
                    <button id="six_months" type="button" class="btn btn-sm btn-subtle-secondary active">6 BULAN</button>
                    <button id="all" type="button" class="btn btn-sm btn-subtle-secondary">SEMUA</button>
                </div>
            </div><!-- end card header -->
            <div class="card-body ps-1">
                <div>
                    <div id="revenue_overview" data-colors='["--tb-primary", "--tb-info"]' class="apex-charts"
                        dir="ltr"></div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title mb-0 flex-grow-1">Sales by Traffic Source</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                    <a class="dropdown-item" href="#">Current Year</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sales_traffic_source"
                            data-colors='["--tb-primary", "--tb-secondary", "--tb-danger", "--tb-warning"]'
                            class="apex-charts" dir="ltr"></div>
                        <div class="mt-3 pt-2">
                            <h6>Traffic Sources:</h6>
                            <div class="d-flex mb-2 text-primary">
                                <div class="flex-grow-1">
                                    <p class="text-truncate mb-0"><i
                                            class="bi bi-circle fs-xs align-baseline me-2"></i>Facebook </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">33.9%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex mb-2 text-secondary">
                                <div class="flex-grow-1">
                                    <p class="text-truncate mb-0"><i
                                            class="bi bi-circle fs-xs align-baseline me-2"></i>Instagram </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">23.0%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex mb-2 text-danger">
                                <div class="flex-grow-1">
                                    <p class="text-truncate mb-0"><i
                                            class="bi bi-circle fs-xs align-baseline me-2"></i>YouTube </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">25.3%</p>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex text-warning">
                                <div class="flex-grow-1">
                                    <p class="text-truncate mb-0"><i
                                            class="bi bi-circle fs-xs align-baseline me-2"></i>Google Ads</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <p class="mb-0">17.8%</p>
                                </div>
                            </div><!-- end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-height-100">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title mb-0 flex-grow-1">Best Selling Products</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold text-uppercase">Sort by: </span><span
                                        class="text-muted align-baseline">Today<i
                                            class="bi bi-chevron-down align-baseline ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Yesterday</a>
                                    <a class="dropdown-item" href="#">Last 7 Days</a>
                                    <a class="dropdown-item" href="#">Last 30 Days</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div data-simplebar class="px-3" style="max-height: 395px;">
                            <div class="vstack gap-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="https://img.themesbrand.com/judia/products/img-6.png"
                                                alt="" class="avatar-xs">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#!">
                                            <h6 class="fs-md mb-2">The short sleeved</h6>
                                        </a>
                                        <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                            <li>
                                                <i class="ph-star align-baseline"></i> 487
                                            </li>
                                            <li>
                                                <i class="ph-shopping-cart align-baseline"></i> 936
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="fs-md text-primary mb-0">$154.00</h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="avatar-sm flex-shrink-0">
                                        <div class="avatar-title bg-light rounded">
                                            <img src="https://img.themesbrand.com/judia/products/img-1.png"
                                                alt="" class="avatar-xs">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#!">
                                            <h6 class="fs-md mb-2">Aster t-shirt 2XL / Royal Blue</h6>
                                        </a>
                                        <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                            <li>
                                                <i class="ph-star align-baseline"></i> 487
                                            </li>
                                            <li>
                                                <i class="ph-shopping-cart align-baseline"></i> 936
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="fs-md text-primary mb-0">$15.99</h5>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-3.png"
                                                    alt="" class="avatar-xs">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!">
                                                <h6 class="fs-md mb-2">Unique Men's Wrist Watch</h6>
                                            </a>
                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                <li>
                                                    <i class="ph-star align-baseline"></i> 452
                                                </li>
                                                <li>
                                                    <i class="ph-shopping-cart align-baseline"></i> 1420
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="fs-md text-primary mb-0">$84.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-7.png"
                                                    alt="" class="avatar-xs">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!">
                                                <h6 class="fs-md mb-2">Twiala Floral Dress</h6>
                                            </a>
                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                <li>
                                                    <i class="ph-star align-baseline"></i> 562
                                                </li>
                                                <li>
                                                    <i class="ph-shopping-cart align-baseline"></i> 1348
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="fs-md text-primary mb-0">$149.99</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-8.png"
                                                    alt="" class="avatar-xs">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!">
                                                <h6 class="fs-md mb-2">Tokyo Fancy Bomber Jacket</h6>
                                            </a>
                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                <li>
                                                    <i class="ph-star align-baseline"></i> 644
                                                </li>
                                                <li>
                                                    <i class="ph-shopping-cart align-baseline"></i> 1540
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="fs-md text-primary mb-0">$245.00</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-10.png"
                                                    alt="" class="avatar-xs">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!">
                                                <h6 class="fs-md mb-2">Aster Dress 2XL / Royal Blue</h6>
                                            </a>
                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                <li>
                                                    <i class="ph-star align-baseline"></i> 841
                                                </li>
                                                <li>
                                                    <i class="ph-shopping-cart align-baseline"></i> 985
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="fs-md text-primary mb-0">$74.63</h5>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="avatar-sm flex-shrink-0">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-4.png"
                                                    alt="" class="avatar-xs">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!">
                                                <h6 class="fs-md mb-2">Unique bluetooth headphone</h6>
                                            </a>
                                            <ul class="hstack list-unstyled gap-2 mb-0 fs-sm fw-medium text-muted">
                                                <li>
                                                    <i class="ph-star align-baseline"></i> 763
                                                </li>
                                                <li>
                                                    <i class="ph-shopping-cart align-baseline"></i> 763
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="fs-md text-primary mb-0">$245.74</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div><!-- end col -->
    <div class="col-xl-4">
        <div class="card bg-dark text-white ecommerce-widget" id="countDownText">
            <div class="card-body">
                <h5 class="text-white">Product Launch</h5>
                <p class="text-white text-opacity-75 mb-0">The product is going to Launch</p>
                <img src="https://img.themesbrand.com/judia/launch.gif" alt=""
                    class="img-fluid mx-auto d-block">
                <div data-countdown="Oct 30, 2023" class="launch-widgets text-white"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Real Time Sales</h4>
                <div class="dropdown card-header-dropdown float-end">
                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Today</a>
                        <a class="dropdown-item" href="#">Last Week</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Current Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-lg-6">
                        <h5>$10,872.32</h5>
                        <p class="text-muted fs-sm mb-0"><i
                                class="bi bi-circle-fill fs-3xs align-middle me-1 text-info"></i> Avg. Sales Per day
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <h5>$2,493.84</h5>
                        <p class="text-muted fs-sm mb-0"><i
                                class="bi bi-circle-fill fs-3xs align-middle me-1 text-primary"></i> Avg. Sales Per day
                        </p>
                    </div>
                </div>
                <div id="real_time_sales" data-colors='["--tb-info", "--tb-primary"]' class="apex-charts ms-n3"
                    dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->


<!--end row-->
@endsection
@section('scripts')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard-ecommerce.init.js') }}"></script>
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
