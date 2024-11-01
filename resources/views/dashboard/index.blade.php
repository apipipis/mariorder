@extends('layouts.master')
@section('title')
    dasbor
@endsection
@section('css')
    <!-- jsvectormap css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

@section('page-title')
    <h3 class="page-title text-capitalize fw-medium fs-3xl"><span>Welcome</span> <b>{{ @Auth::user()->name }}</b> 👋</h3>
    <p class="mb-0 page-sub-title">You had completed 68% from your monthly level, keep going to your level.</p>
    {{-- <x-breadcrumb pagetitle="Dashonic" title="Sales Analytics" /> --}}
@endsection

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <h6 class="text-success fs-xs float-end mb-0">
                    <i class="ph ph-trend-up fs-sm align-middle me-1"></i> +16.09 %
                </h6>
                <div>
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Revenue</p>
                    <h4 class="fw-semibold mb-3">$<span class="counter-value" data-target="974.82">0</span>M </h4>
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
                    <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +19.07 %
                </h5>
                <div>
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Earnings</p>
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
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Average Daily Sales</p>
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
                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total Orders</p>
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
                <h4 class="card-title mb-0 flex-grow-1">Revenue Overview</h4>
                <div class="toolbar">
                    <button id="one_month" type="button" class="btn btn-sm btn-subtle-secondary">1M</button>
                    <button id="three_months" type="button" class="btn btn-sm btn-subtle-secondary">3M</button>
                    <button id="six_months" type="button" class="btn btn-sm btn-subtle-secondary active">6M</button>
                    <button id="all" type="button" class="btn btn-sm btn-subtle-secondary">ALL</button>
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

<div class="row">
    <div class="col-lg-12">
        <div class="card" id="contactList">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Latest Orders</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown sortble-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold text-uppercase">Sort by: </span><span
                                class="text-muted dropdown-title">Order Date</span> <i
                                class="bi bi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item sort" data-sort="order_date">Order Date</button>
                            <button class="dropdown-item sort" data-sort="order_id">Order ID</button>
                            <button class="dropdown-item sort" data-sort="amount">Amount</button>
                            <button class="dropdown-item sort" data-sort="status">Status</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="order_date">Order Date</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="order_id">Order ID</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="shop">Shop</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="customer">Customers</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="products">Products</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="status">Status</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="rating">Rating</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td class="order_date">
                                    15 Feb, 2023
                                </td>
                                <td class="order_id">
                                    <a href="#!" class="fw-medium link-primary">#TBS250011</a>
                                </td>
                                <td class="shop">
                                    <img src="https://img.themesbrand.com/judia/companies/img-7.png" alt=""
                                        class="avatar-xxs rounded-circle">
                                </td>
                                <td class="customer">
                                    Alex Smith
                                </td>
                                <td class="products">Clothes</td>
                                <td class="amount">
                                    <span class="fw-medium">$109.00</span>
                                </td>
                                <td class="status">
                                    <span class="badge bg-secondary-subtle text-secondary">New</span>
                                </td>
                                <td class="rating">
                                    <h5 class="fs-md fw-medium mb-0">-</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td class="order_date">
                                    14 Feb, 2023
                                </td>
                                <td class="order_id">
                                    <a href="#!" class="fw-medium link-primary">#TBS250010</a>
                                </td>
                                <td class="shop">
                                    <img src="https://img.themesbrand.com/judia/companies/img-1.png" alt=""
                                        class="avatar-xxs rounded-circle">
                                </td>
                                <td class="customer">
                                    Jansh Brown
                                </td>
                                <td class="products">Kitchen Storage</td>
                                <td class="amount">
                                    <span class="fw-medium">$149.00</span>
                                </td>
                                <td class="status">
                                    <span class="badge bg-warning-subtle text-warning">Pending</span>
                                </td>
                                <td class="rating">
                                    <h5 class="fs-md fw-medium mb-0"><i
                                            class="ph-star align-baseline text-warning"></i> 4.5</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td class="order_date">
                                    30 Jan, 2023
                                </td>
                                <td class="order_id">
                                    <a href="#!" class="fw-medium link-primary">#TBS250009</a>
                                </td>
                                <td class="shop">
                                    <img src="https://img.themesbrand.com/judia/companies/img-2.png" alt=""
                                        class="avatar-xxs rounded-circle">
                                </td>
                                <td class="customer">
                                    Ayaan Bowen
                                </td>
                                <td class="products">Bike Accessories</td>
                                <td class="amount">
                                    <span class="fw-medium">$215.00</span>
                                </td>
                                <td class="status">
                                    <span class="badge bg-danger-subtle text-danger">Out of Delivered</span>
                                </td>
                                <td class="rating">
                                    <h5 class="fs-md fw-medium mb-0"><i
                                            class="ph-star align-baseline text-warning"></i> 4.9</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td class="order_date">
                                    25 Jan, 2023
                                </td>
                                <td class="order_id">
                                    <a href="#!" class="fw-medium link-primary">#TBS250008</a>
                                </td>
                                <td class="shop">
                                    <img src="https://img.themesbrand.com/judia/companies/img-3.png" alt=""
                                        class="avatar-xxs rounded-circle">
                                </td>
                                <td class="customer">
                                    Prezy Mark
                                </td>
                                <td class="products">Furniture</td>
                                <td class="amount">
                                    <span class="fw-medium">$199.00</span>
                                </td>
                                <td class="status">
                                    <span class="badge bg-primary-subtle text-primary">Shipping</span>
                                </td>
                                <td class="rating">
                                    <h5 class="fs-md fw-medium mb-0"><i
                                            class="ph-star align-baseline text-warning"></i> 4.3</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td class="order_date">
                                    19 Jan, 2023
                                </td>
                                <td class="order_id">
                                    <a href="#!" class="fw-medium link-primary">#TBS250007</a>
                                </td>
                                <td class="shop">
                                    <img src="https://img.themesbrand.com/judia/companies/img-4.png" alt=""
                                        class="avatar-xxs rounded-circle">
                                </td>
                                <td class="customer">
                                    Vihan Hudda
                                </td>
                                <td class="products">Bags and Wallets</td>
                                <td class="amount">
                                    <span class="fw-medium">$330.00</span>
                                </td>
                                <td class="status">
                                    <span class="badge bg-success-subtle text-success">Delivered</span>
                                </td>
                                <td class="rating">
                                    <h5 class="fs-md fw-medium mb-0"><i
                                            class="ph-star align-baseline text-warning"></i> 4.7</h5>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <td class="order_date">
                                    16 Jan, 2023
                                </td>
                                <td class="order_id">
                                    <a href="#!" class="fw-medium link-primary">#TBS250006</a>
                                </td>
                                <td class="shop">
                                    <img src="https://img.themesbrand.com/judia/companies/img-5.png" alt=""
                                        class="avatar-xxs rounded-circle">
                                </td>
                                <td class="customer">
                                    Vihan Hudda
                                </td>
                                <td class="products">Bags and Wallets</td>
                                <td class="amount">
                                    <span class="fw-medium">$745.11</span>
                                </td>
                                <td class="status">
                                    <span class="badge bg-warning-subtle text-warning">Pending</span>
                                </td>
                                <td class="rating">
                                    <h5 class="fs-md fw-medium mb-0"><i
                                            class="ph-star align-baseline text-warning"></i> 4.6</h5>
                                </td>
                            </tr><!-- end tr -->
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                    <div class="noresult" style="display: none">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                            <p class="text-muted mb-0">We've searched more than 150+ transactions We did not find any
                                transactions for you search.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-5">
        <!-- card -->
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Sales by Countries</h4>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-subtle-primary btn-sm">
                        Export Report
                    </button>
                </div>
            </div><!-- end card header -->

            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h3 class="text-secondary"><span class="counter-value" data-target="53736"></span> <small
                                class="text-muted fw-normal fs-sm">Sales</small></h3>
                        <h6 class="text-muted mb-3 fw-medium fs-xs text-uppercase">Compared to last month</h6>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="text-success"><i class="bi bi-arrow-up-right align-baseline me-1"></i>
                            1.5%</span>
                    </div>
                </div>
                <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 330px"></div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
    <div class="col-xl-7">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Stock Products</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="fw-semibold text-uppercase">Sort by:
                            </span><span class="text-muted">Today <i
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
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-2">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-1.png"
                                                    alt="" class="img-fluid d-block avatar-xs">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1"><a href="#!" class="text-reset">Branded
                                                    T-Shirts</a></h6>
                                            <span class="text-muted">24 Apr 2023</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1">$29.00</h6>
                                    <span class="text-muted">Price</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">62</h6>
                                    <span class="text-muted">Orders</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">510</h6>
                                    <span class="text-muted">Stock</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">$1,798</h6>
                                    <span class="text-muted">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-2">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-2.png"
                                                    alt="" class="img-fluid d-block avatar-xs">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1"><a href="#!" class="text-reset">Bentwood
                                                    Chair</a></h6>
                                            <span class="text-muted">19 Mar 2023</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1">$85.20</h6>
                                    <span class="text-muted">Price</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">35</h6>
                                    <span class="text-muted">Orders</span>
                                </td>
                                <td>
                                    <h6 class="mb-1"><span class="badge bg-danger-subtle text-danger">Out of
                                            stock</span> </h6>
                                    <span class="text-muted">Stock</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">$2982</h6>
                                    <span class="text-muted">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-2">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-3.png"
                                                    alt="" class="img-fluid d-block avatar-xs">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1"><a href="#!" class="text-reset">Borosil Paper
                                                    Cup</a></h6>
                                            <span class="text-muted">01 Mar 2023</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1">$14.00</h6>
                                    <span class="text-muted">Price</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">80</h6>
                                    <span class="text-muted">Orders</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">749</h6>
                                    <span class="text-muted">Stock</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">$1120</h6>
                                    <span class="text-muted">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-2">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-4.png"
                                                    alt="" class="img-fluid d-block avatar-xs">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="mb-1"><a href="#!" class="text-reset">One Seater
                                                    Sofa</a></h6>
                                            <span class="text-muted">11 Feb 2023</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1">$127.50</h6>
                                    <span class="text-muted">Price</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">56</h6>
                                    <span class="text-muted">Orders</span>
                                </td>
                                <td>
                                    <h6 class="mb-1"><span class="badge bg-danger-subtle text-danger">Out of
                                            stock</span></h6>
                                    <span class="text-muted">Stock</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">$7140</h6>
                                    <span class="text-muted">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm me-2">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="https://img.themesbrand.com/judia/products/img-5.png"
                                                    alt="" class="img-fluid d-block avatar-xs">
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="my-1"><a href="#!" class="text-reset">Stillbird
                                                    Helmet</a></h6>
                                            <span class="text-muted">17 Jan 2023</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="mb-1">$54</h6>
                                    <span class="text-muted">Price</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">74</h6>
                                    <span class="text-muted">Orders</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">805</h6>
                                    <span class="text-muted">Stock</span>
                                </td>
                                <td>
                                    <h6 class="mb-1">$3996</h6>
                                    <span class="text-muted">Amount</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="align-items-center mt-4 pt-2 justify-content-between row text-center text-sm-start">
                    <div class="col-sm">
                        <div class="text-muted">
                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                        </div>
                    </div>
                    <div class="col-sm-auto  mt-3 mt-sm-0">
                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center">
                            <li class="page-item disabled">
                                <a href="#" class="page-link">←</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">→</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-4 col-lg-6">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title flex-grow-1 mb-0">Recent Activity</h5>
                <div class="flex-shrink-0">
                    <a href="#!" class="btn btn-subtle-info btn-sm">View More <i
                            class="ph-caret-right align-middle"></i></a>
                </div>
            </div>
            <div class="card-body px-0">
                <div data-simplebar class="px-3" style="max-height: 352px;">
                    <ul class="activity-timeline-2 list-unstyled mb-0 pt-1">
                        <li>
                            <h6 class="mb-1 lh-base">Monthly sales report</h6>
                            <p class="text-muted mb-2"><span class="text-danger">2 days left</span> notification to
                                submit the monthly sales report. <a href="javascript:void(0);"
                                    class="link-warning text-decoration-underline">Reports Builder</a></p>
                            <small class="mb-0 text-muted">15 Oct, 2023</small>
                        </li>
                        <li>
                            <h6 class="mb-1 lh-base">Favorites Product</h6>
                            <p class="text-muted mb-2">Esther James have Favorites product.</p>
                            <small class="mb-0 text-muted">25 Nov, 2023</small>
                        </li>
                        <li>
                            <h6 class="fs-md">Purchase by James Price</h6>
                            <p>09:24 PM</p>
                            <p class="mb-0">Product noise evolve smartwatch</p>
                        </li>
                        <li>
                            <h6 class="fs-md">New ticket received <span
                                    class="badge text-bg-info align-middle ms-1">New</span></h6>
                            <p class="mb-3">4 days ago</p>
                            <p class="text-muted mb-0">User <span class="text-secondary">Erica245</span> submitted a
                                ticket</p>
                        </li>
                        <li>
                            <h6 class="mb-1 lh-base">Natasha Carey have liked the products</h6>
                            <p class="text-muted mb-2">Allow users to like products in your WooCommerce store.</p>
                            <small class="mb-0 text-muted">25 Dec, 2023</small>
                        </li>
                        <li>
                            <h6 class="fs-md">Adding a new event with attachments</h6>
                            <p class="mb-3">30 days ago</p>
                            <div class="d-inline-flex gap-2">
                                <div class="row g-3">
                                    <div class="col-auto">
                                        <div class="d-flex position-relative gap-2 border border-dashed p-2 rounded">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-file-earmark-image fs-xl text-danger"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="stretched-link">
                                                    <h6>UI/UX design</h6>
                                                </a>
                                                <small>685 KB</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex position-relative gap-2 border border-dashed p-2 rounded ">
                                            <div class="flex-shrink-0">
                                                <i class="bi bi-file-pdf fs-xl text-info"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="stretched-link">
                                                    <h6>Judia Invoice</h6>
                                                </a>
                                                <small>342 KB</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h6 class="mb-1 lh-base">Flash sale starting <span class="text-primary">Tomorrow.</span>
                            </h6>
                            <p class="text-muted mb-2">Flash sale by <a href="javascript:void(0);"
                                    class="link-secondary fw-medium">Zoetic Fashion</a></p>
                            <small class="mb-0 text-muted">22 Oct, 2023</small>
                        </li>
                        <li>
                            <h6 class="mb-1 lh-base">Today offers by <a href="#!"
                                    class="link-secondary">Digitech Galaxy</a></h6>
                            <p class="text-muted mb-2">Offer is valid on orders of $230 Or above for selected products
                                only.</p>
                            <small class="mb-0 text-muted">12 Dec, 2023</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-4 col-lg-6">
        <div class="card card-height-100">
            <div class="card-header d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Online Store</h4>
                <div class="flex-shrink-0">
                    <a href="#!" class="text-decoration-underline">View Report <i
                            class="bi bi-arrow-right align-baseline ms-1"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h3 class="text-secondary"><span class="counter-value" data-target="6492">0</span> <small
                                class="text-muted fw-normal fs-sm">Sales</small></h3>
                        <p class="text-muted fs-xs text-uppercase">Compared to offline store</p>
                    </div>
                    <div class="flex-shrink-0">
                        <span class="text-success"><i class="bi bi-arrow-up-right align-baseline me-1"></i>
                            3.41%</span>
                    </div>
                </div>
                <div id="online_store" data-colors='["--tb-primary"]' class="apex-charts ms-n3" dir="ltr">
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-4">
        <div class="card card-primary">
            <div class="card-body">
                <img src="https://img.themesbrand.com/judia/dashboard-plan.png" alt="" height="95"
                    class="float-end">
                <h6 class="card-title text-reset">Need More Start</h6>
                <p class="opacity-75">Upgrade to pro for added benefits by judia.</p>
                <a href="pages-pricing" class="btn btn-info">Upgrade Plan</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Conversions</h5>
            </div>
            <div class="card-body">
                <div class="row mb-3 g-3">
                    <div class="col-lg-6">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="avatar-sm">
                                <div class="avatar-title rounded bg-success-subtle text-success fs-2xl">
                                    <i class="bi bi-database-down"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fs-lg">$15,452</h5>
                                <p class="text-muted mb-0">Income</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="avatar-sm">
                                <div class="avatar-title rounded bg-danger-subtle text-danger fs-2xl">
                                    <i class="bi bi-database-up"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fs-lg">$11,341.32</h5>
                                <p class="text-muted mb-0">Expense</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bar_chart" data-colors='["--tb-secondary", "--tb-danger"]' class="apex-charts ms-n2"
                    dir="ltr"></div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
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
