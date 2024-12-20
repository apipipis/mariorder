@extends('layouts.custom')
@section('title')
    Katalog Toko
@endsection
@section('css')
    <!-- Sweet Alert css-->
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="page-title-box">
        <div class="row align-items-center gy-3">
            
            <div class="col-md-auto ms-auto">
            </div><!--end col-->
        </div><!--end row-->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills crypto-marketplace-nav mb-3 mt-5 mt-md-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="TokoList-tab" data-bs-toggle="pill"
                        data-bs-target="#TokoList" type="button" role="tab" aria-controls="TokoList"
                        aria-selected="true">Semua Toko</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="HighestRating-tab" data-bs-toggle="pill" data-bs-target="#HighestRating"
                        type="button" role="tab" aria-controls="HighestRating" aria-selected="false">Rating Tertinggi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="spotMarkets-tab" data-bs-toggle="pill" data-bs-target="#spotMarkets"
                        type="button" role="tab" aria-controls="spotMarkets" aria-selected="false">Spot
                        Markets</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane show active" id="TokoList" role="tabpanel" aria-labelledby="TokoList-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card icon-effect-widgets overflow-hidden">
                                <i class="bi bi-shop-window position-absolute icon"></i>
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                    <h6 class="fs-md">Change (24H)</h6>

                                    <div class="mt-4 pt-2">
                                        <h4>13.74%</h4>
                                        <p class="text-muted mb-0"><span class="fw-medium text-success">14.57%</span> Since
                                            last
                                            month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card icon-effect-widgets overflow-hidden">
                                <i class="bi bi-journals position-absolute icon"></i>
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                    <h6 class="fs-md">Maker Dominance</h6>

                                    <div class="mt-4 pt-2">
                                        <h4>-4.38%</h4>
                                        <p class="text-muted mb-0"><span class="fw-medium text-danger">2.19%</span> Since
                                            last
                                            month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card icon-effect-widgets overflow-hidden">
                                <i class="bi bi-recycle position-absolute icon"></i>
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                    <h6 class="fs-md">Top Loser (24H)</h6>

                                    <div class="mt-4 pt-2">
                                        <h4>-8.16%</h4>
                                        <p class="text-muted mb-0"><span class="fw-medium text-success">1.33%</span> Since
                                            last
                                            month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card icon-effect-widgets overflow-hidden">
                                <i class="bi bi-tags position-absolute icon"></i>
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Current Years</a>
                                            <a class="dropdown-item" href="#">Last Years</a>
                                        </div>
                                    </div>
                                    <h6 class="fs-md">Top Gainer (24H)</h6>

                                    <div class="mt-4 pt-2">
                                        <h4>27.48%</h4>
                                        <p class="text-muted mb-0"><span class="fw-medium text-success">7.19%</span> Since
                                            last
                                            month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    <div class="card" id="transactionList">
                        <div class="card-header d-flex align-items-center">
                            <h4 class="card-title flex-grow-1 mb-0">Crypto Currency</h4>
                            <div class="search-box flex-shrink-0">
                                <input type="text" class="form-control search"
                                    placeholder="Search for coin, price etc...">
                                <i class="ri-search-2-line search-icon"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" data-sort="id">#</th>
                                            <th scope="col" data-sort="Name">Name</th>
                                            <th scope="col" data-sort="Price">Price</th>
                                            <th scope="col" data-sort="1h %">1h %</th>
                                            <th scope="col" data-sort="24h %">24h %</th>
                                            <th scope="col" data-sort="7d %">7d %</th>
                                            <th scope="col" data-sort="Market Cap">Market Cap</th>
                                            <th scope="col" data-sort="Volume (24h)">Volume (24h)</th>
                                            <th scope="col" data-sort="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <th scope="row" class="id">1</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/btc.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Bitcoin <span
                                                            class="badge bg-light text-body fw-normal">BTC</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$26,807.45</td>
                                            <td class="text-success 1h%">0.16%</td>
                                            <td class="text-danger 24h%">1.83%</td>
                                            <td class="text-danger 7d%">0.18%</td>
                                            <td class="market cap">$519,613,016,809</td>
                                            <td>$12,492,715,725</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">2</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/eth.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Ethereum <span
                                                            class="badge bg-light text-body fw-normal">ETH</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$1,818.98</td>
                                            <td class="text-success 1h%">0.12%</td>
                                            <td class="text-danger 24h%">2.02%</td>
                                            <td class="text-success 7d%">0.61%</td>
                                            <td class="market cap">$218,755,466,290</td>
                                            <td class="volume (24h)">$5,880,391,745</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">3</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/usdt.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Tether <span
                                                            class="badge bg-light text-body fw-normal">USDT</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$0.9999</td>
                                            <td class="text-success">0.01%</td>
                                            <td class="text-danger">0.02%</td>
                                            <td class="text-danger">0.02%</td>
                                            <td>$83,020,592,698</td>
                                            <td>$20,074,570,094</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">4</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/sol.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Solana <span
                                                            class="badge bg-light text-body fw-normal">SOL</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$19.52</td>
                                            <td class="text-danger">0.15%</td>
                                            <td class="text-success">1.43%</td>
                                            <td class="text-danger">5.51%</td>
                                            <td>$7,733,266,613</td>
                                            <td>$239,223,676</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">5</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/ltc.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Litecoin <span
                                                            class="badge bg-light text-body fw-normal">LTC</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$86.72</td>
                                            <td class="text-success">0.25%</td>
                                            <td class="text-danger">5.57%</td>
                                            <td class="text-danger">6.27%</td>
                                            <td>$6,329,627,132</td>
                                            <td>$589,392,797</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="price">6</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/trx.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">TRON <span
                                                            class="badge bg-light text-body fw-normal">TRX</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$0.07711</td>
                                            <td class="text-danger">0.59%</td>
                                            <td class="text-danger">1.24%</td>
                                            <td class="text-success">9.03%</td>
                                            <td>$6,964,078,550</td>
                                            <td>$213,515,833</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">7</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/aave.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Aave <span
                                                            class="badge bg-light text-body fw-normal">AAVE</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$64.09</td>
                                            <td class="text-success">0.04%</td>
                                            <td class="text-danger">2.22%</td>
                                            <td class="text-success">2.25%</td>
                                            <td>$922,658,515</td>
                                            <td>$29,377,273</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">8</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/dash.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Dash <span
                                                            class="badge bg-light text-body fw-normal">DASH</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$42.03</td>
                                            <td class="text-success">0.18%</td>
                                            <td class="text-danger">4.76%</td>
                                            <td class="text-danger">6.73%</td>
                                            <td>$474,405,043</td>
                                            <td>$50,392,655</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">9</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/dcr.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Decred <span
                                                            class="badge bg-light text-body fw-normal">DCR</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$16.52</td>
                                            <td class="text-success">0.84%</td>
                                            <td class="text-danger">1.65%</td>
                                            <td class="text-danger">5.25%</td>
                                            <td>$247,283,803</td>
                                            <td>$980,916</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">10</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/zen.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Horizen <span
                                                            class="badge bg-light text-body fw-normal">ZEN</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$8.61</td>
                                            <td class="text-danger">0.01%</td>
                                            <td class="text-danger">1.58%</td>
                                            <td class="text-success">1.94%</td>
                                            <td>$118,061,115</td>
                                            <td>$4,535,690</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="id">11</th>
                                            <td class="name">
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/gas.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Gas <span
                                                            class="badge bg-light text-body fw-normal">GAS</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td class="price">$2.82</td>
                                            <td class="text-danger">0.05%</td>
                                            <td class="text-danger">0.17%</td>
                                            <td class="text-success">3.17%</td>
                                            <td>$28,546,843</td>
                                            <td>$10,548,431</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center py-4">
                                        <i class="ph-magnifying-glass fs-1 text-primary"></i>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 164+
                                            Transaction We did not find any Transaction for you search.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center mt-3 justify-content-between row text-center text-sm-start"
                                id="pagination-element">
                                <div class="col-sm">
                                    <div class="text-muted">
                                        Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">12</span>
                                        Results
                                    </div>
                                </div>
                                <div class="col-sm-auto mt-3 mt-sm-0">
                                    <div
                                        class="pagination-wrap hstack gap-2 justify-content-center justify-content-sm-end">
                                        <a class="page-item pagination-prev disabled" href="#">
                                            Previous
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="#">
                                            Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="HighestRating" role="tabpanel" aria-labelledby="HighestRating-tab" tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title flex-grow-1 mb-0">Favorites Crypto Currency</h4>
                                <div class="search-box flex-shrink-0">
                                    <input type="text" class="form-control"
                                        placeholder="Search for coin, price etc...">
                                    <i class="ri-search-2-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom align-middle table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">1h %</th>
                                    <th scope="col">24h %</th>
                                    <th scope="col">7d %</th>
                                    <th scope="col">Market Cap</th>
                                    <th scope="col">Volume (24h)</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/btc.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Bitcoin <span
                                                    class="badge bg-light text-body fw-normal">BTC</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$26,807.45</td>
                                    <td class="text-success">0.16%</td>
                                    <td class="text-danger">1.83%</td>
                                    <td class="text-danger">0.18%</td>
                                    <td>$519,613,016,809</td>
                                    <td>$12,492,715,725</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/eth.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Ethereum <span
                                                    class="badge bg-light text-body fw-normal">ETH</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$1,818.98</td>
                                    <td class="text-success">0.12%</td>
                                    <td class="text-danger">2.02%</td>
                                    <td class="text-success">0.61%</td>
                                    <td>$218,755,466,290</td>
                                    <td>$5,880,391,745</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/usdt.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Tether <span
                                                    class="badge bg-light text-body fw-normal">USDT</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$0.9999</td>
                                    <td class="text-success">0.01%</td>
                                    <td class="text-danger">0.02%</td>
                                    <td class="text-danger">0.02%</td>
                                    <td>$83,020,592,698</td>
                                    <td>$20,074,570,094</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/sol.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Solana <span
                                                    class="badge bg-light text-body fw-normal">SOL</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$19.52</td>
                                    <td class="text-danger">0.15%</td>
                                    <td class="text-success">1.43%</td>
                                    <td class="text-danger">5.51%</td>
                                    <td>$7,733,266,613</td>
                                    <td>$239,223,676</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/ltc.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Litecoin <span
                                                    class="badge bg-light text-body fw-normal">LTC</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$86.72</td>
                                    <td class="text-success">0.25%</td>
                                    <td class="text-danger">5.57%</td>
                                    <td class="text-danger">6.27%</td>
                                    <td>$6,329,627,132</td>
                                    <td>$589,392,797</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="spotMarkets" role="tabpanel" aria-labelledby="spotMarkets-tab"
                    tabindex="0">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4 class="card-title flex-grow-1 mb-0">Spot Markets</h4>
                            <div class="search-box flex-shrink-0">
                                <input type="text" class="form-control" placeholder="Search for coin, price etc...">
                                <i class="ri-search-2-line search-icon"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">1h %</th>
                                            <th scope="col">24h %</th>
                                            <th scope="col">7d %</th>
                                            <th scope="col">Market Cap</th>
                                            <th scope="col">Volume (24h)</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/btc.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Bitcoin <span
                                                            class="badge bg-light text-body fw-normal">BTC</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$26,807.45</td>
                                            <td class="text-success">0.16%</td>
                                            <td class="text-danger">1.83%</td>
                                            <td class="text-danger">0.18%</td>
                                            <td>$519,613,016,809</td>
                                            <td>$12,492,715,725</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/eth.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Ethereum <span
                                                            class="badge bg-light text-body fw-normal">ETH</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$1,818.98</td>
                                            <td class="text-success">0.12%</td>
                                            <td class="text-danger">2.02%</td>
                                            <td class="text-success">0.61%</td>
                                            <td>$218,755,466,290</td>
                                            <td>$5,880,391,745</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/usdt.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Tether <span
                                                            class="badge bg-light text-body fw-normal">USDT</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$0.9999</td>
                                            <td class="text-success">0.01%</td>
                                            <td class="text-danger">0.02%</td>
                                            <td class="text-danger">0.02%</td>
                                            <td>$83,020,592,698</td>
                                            <td>$20,074,570,094</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/sol.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Solana <span
                                                            class="badge bg-light text-body fw-normal">SOL</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$19.52</td>
                                            <td class="text-danger">0.15%</td>
                                            <td class="text-success">1.43%</td>
                                            <td class="text-danger">5.51%</td>
                                            <td>$7,733,266,613</td>
                                            <td>$239,223,676</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/ltc.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Litecoin <span
                                                            class="badge bg-light text-body fw-normal">LTC</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$86.72</td>
                                            <td class="text-success">0.25%</td>
                                            <td class="text-danger">5.57%</td>
                                            <td class="text-danger">6.27%</td>
                                            <td>$6,329,627,132</td>
                                            <td>$589,392,797</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/trx.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">TRON <span
                                                            class="badge bg-light text-body fw-normal">TRX</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$0.07711</td>
                                            <td class="text-danger">0.59%</td>
                                            <td class="text-danger">1.24%</td>
                                            <td class="text-success">9.03%</td>
                                            <td>$6,964,078,550</td>
                                            <td>$213,515,833</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/aave.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Aave <span
                                                            class="badge bg-light text-body fw-normal">AAVE</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$64.09</td>
                                            <td class="text-success">0.04%</td>
                                            <td class="text-danger">2.22%</td>
                                            <td class="text-success">2.25%</td>
                                            <td>$922,658,515</td>
                                            <td>$29,377,273</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/dash.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Dash <span
                                                            class="badge bg-light text-body fw-normal">DASH</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$42.03</td>
                                            <td class="text-success">0.18%</td>
                                            <td class="text-danger">4.76%</td>
                                            <td class="text-danger">6.73%</td>
                                            <td>$474,405,043</td>
                                            <td>$50,392,655</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/dcr.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Decred <span
                                                            class="badge bg-light text-body fw-normal">DCR</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$16.52</td>
                                            <td class="text-success">0.84%</td>
                                            <td class="text-danger">1.65%</td>
                                            <td class="text-danger">5.25%</td>
                                            <td>$247,283,803</td>
                                            <td>$980,916</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/zen.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Horizen <span
                                                            class="badge bg-light text-body fw-normal">ZEN</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$8.61</td>
                                            <td class="text-danger">0.01%</td>
                                            <td class="text-danger">1.58%</td>
                                            <td class="text-success">1.94%</td>
                                            <td>$118,061,115</td>
                                            <td>$4,535,690</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td>
                                                <a href="apps-crypto-coin-overview"
                                                    class="d-flex gap-2 align-items-center">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/gas.svg"
                                                        alt="" class="avatar-xxs">
                                                    <h6 class="mb-0">Gas <span
                                                            class="badge bg-light text-body fw-normal">GAS</span>
                                                    </h6>
                                                </a>
                                            </td>
                                            <td>$2.82</td>
                                            <td class="text-danger">0.05%</td>
                                            <td class="text-danger">0.17%</td>
                                            <td class="text-success">3.17%</td>
                                            <td>$28,546,843</td>
                                            <td>$10,548,431</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item"
                                                            href="apps-crypto-coin-overview">Overview</a>
                                                        <a class="dropdown-item" href="#">View
                                                            Charts</a>
                                                        <a class="dropdown-item" href="#">Historical
                                                            Data</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="align-items-center mt-4 justify-content-between row text-center text-sm-start"
                                id="pagination-element">
                                <div class="col-sm">
                                    <div class="text-muted">
                                        Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">13</span>
                                        Results
                                    </div>
                                </div>
                                <div class="col-sm-auto  mt-3 mt-sm-0">
                                    <div class="pagination-wrap hstack gap-2">
                                        <a class="page-item pagination-prev disabled"
                                            href="javascript:void(0)">Previous</a>
                                        <ul class="pagination listjs-pagination mb-0">
                                            <li class="active"><a class="page" href="#" data-i="1"
                                                    data-page="10">1</a></li>
                                            <li><a class="page" href="#" data-i="2" data-page="10">2</a>
                                            </li>
                                        </ul>
                                        <a class="page-item pagination-next" href="javascript:void(0)">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="futuresMarkets" role="tabpanel" aria-labelledby="futuresMarkets-tab"
                    tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title flex-grow-1 mb-0">Futures Markets</h4>
                                <div class="search-box flex-shrink-0">
                                    <input type="text" class="form-control"
                                        placeholder="Search for coin, price etc...">
                                    <i class="ri-search-2-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom align-middle table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">1h %</th>
                                    <th scope="col">24h %</th>
                                    <th scope="col">7d %</th>
                                    <th scope="col">Market Cap</th>
                                    <th scope="col">Volume (24h)</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/btc.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Bitcoin <span
                                                    class="badge bg-light text-body fw-normal">BTC</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$26,807.45</td>
                                    <td class="text-success">0.16%</td>
                                    <td class="text-danger">1.83%</td>
                                    <td class="text-danger">0.18%</td>
                                    <td>$519,613,016,809</td>
                                    <td>$12,492,715,725</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/eth.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Ethereum <span
                                                    class="badge bg-light text-body fw-normal">ETH</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$1,818.98</td>
                                    <td class="text-success">0.12%</td>
                                    <td class="text-danger">2.02%</td>
                                    <td class="text-success">0.61%</td>
                                    <td>$218,755,466,290</td>
                                    <td>$5,880,391,745</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/usdt.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Tether <span
                                                    class="badge bg-light text-body fw-normal">USDT</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$0.9999</td>
                                    <td class="text-success">0.01%</td>
                                    <td class="text-danger">0.02%</td>
                                    <td class="text-danger">0.02%</td>
                                    <td>$83,020,592,698</td>
                                    <td>$20,074,570,094</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/sol.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Solana <span
                                                    class="badge bg-light text-body fw-normal">SOL</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$19.52</td>
                                    <td class="text-danger">0.15%</td>
                                    <td class="text-success">1.43%</td>
                                    <td class="text-danger">5.51%</td>
                                    <td>$7,733,266,613</td>
                                    <td>$239,223,676</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>
                                        <a href="apps-crypto-coin-overview" class="d-flex gap-2 align-items-center">
                                            <img src="https://img.themesbrand.com/judia/svg/crypto-icons/ltc.svg"
                                                alt="" class="avatar-xxs">
                                            <h6 class="mb-0">Litecoin <span
                                                    class="badge bg-light text-body fw-normal">LTC</span>
                                            </h6>
                                        </a>
                                    </td>
                                    <td>$86.72</td>
                                    <td class="text-success">0.25%</td>
                                    <td class="text-danger">5.57%</td>
                                    <td class="text-danger">6.27%</td>
                                    <td>$6,329,627,132</td>
                                    <td>$589,392,797</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-icon btn-subtle-primary btn-sm dropdown-btn"
                                                href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="apps-crypto-coin-overview">Overview</a>
                                                <a class="dropdown-item" href="#">View Charts</a>
                                                <a class="dropdown-item" href="#">Historical Data</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="newListing" role="tabpanel" aria-labelledby="newListing-tab"
                    tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title flex-grow-1 mb-0">IPO Listing</h4>
                                <div class="search-box flex-shrink-0">
                                    <input type="text" class="form-control"
                                        placeholder="Search for IPO coin, price etc...">
                                    <i class="ri-search-2-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-4">
                                        <img src="https://img.themesbrand.com/judia/svg/crypto-icons/adx.svg"
                                            alt="" class="avatar-sm flex-shrink-0">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Healthy Olive Oil</h6>
                                            <p class="text-success mb-0">Active</p>
                                        </div>
                                        <div class="dropdown flex-shrink-0">
                                            <a class="text-reset dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Current Years</a>
                                                <a class="dropdown-item" href="#">Last Years</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-warning hstack gap-1 fs-lg mb-3">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-half"></i>
                                    </div>
                                    <div class="d-flex justify-content-between gap-2">
                                        <h6 class="text-muted fs-lg mb-0"><span class="text-body">$14,584,985</span>/
                                            $15,000,000</h6>
                                        <span class="text-success">87.5%</span>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-outline-primary btn-hover w-100">Buy
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-4">
                                        <img src="https://img.themesbrand.com/judia/svg/crypto-icons/crw.svg"
                                            alt="" class="avatar-sm flex-shrink-0">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">Escrow Fomo Chronicles</h6>
                                            <p class="text-info mb-0">Upcoming</p>
                                        </div>
                                        <div class="dropdown flex-shrink-0">
                                            <a class="text-reset dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Current Years</a>
                                                <a class="dropdown-item" href="#">Last Years</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-warning hstack gap-1 fs-lg mb-3">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-half"></i>
                                    </div>
                                    <div class="d-flex justify-content-between gap-2">
                                        <h6 class="fs-lg mb-0"> $12,000,000</h6>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-outline-primary btn-hover w-100">Buy
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-4">
                                        <img src="https://img.themesbrand.com/judia/svg/crypto-icons/vibe.svg"
                                            alt="" class="avatar-sm flex-shrink-0">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">GreatRiver Science</h6>
                                            <p class="text-danger mb-0">Ended</p>
                                        </div>
                                        <div class="dropdown flex-shrink-0">
                                            <a class="text-reset dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Current Years</a>
                                                <a class="dropdown-item" href="#">Last Years</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-warning hstack gap-1 fs-lg mb-3">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-half"></i>
                                    </div>
                                    <div class="d-flex justify-content-between gap-2">
                                        <h6 class="text-muted fs-lg mb-0"><span class="text-body">$5,154,584</span>/
                                            $10,000,000</h6>
                                        <span class="text-success">50.2%</span>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-outline-primary btn-hover w-100">Buy
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-2 mb-4">
                                        <img src="https://img.themesbrand.com/judia/svg/crypto-icons/fil.svg"
                                            alt="" class="avatar-sm flex-shrink-0">
                                        <div class="flex-grow-1">
                                            <h6 class="fw-medium mb-1">GreatRiver Science</h6>
                                            <p class="text-success mb-0">Active</p>
                                        </div>
                                        <div class="dropdown flex-shrink-0">
                                            <a class="text-reset dropdown-btn" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Current Years</a>
                                                <a class="dropdown-item" href="#">Last Years</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-warning hstack gap-1 fs-lg mb-3">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i
                                            class="bi bi-star"></i>
                                    </div>
                                    <div class="d-flex justify-content-between gap-2">
                                        <h6 class="text-muted fs-lg mb-0"><span class="text-body">$2,154,584</span>/
                                            $10,000,000</h6>
                                        <span class="text-success">29.32%</span>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn btn-outline-primary btn-hover w-100">Buy
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>

    <!-- START CREATE FILE MODAL -->
    <div class="modal fade zoomIn" id="createFileModal" tabindex="-1" aria-labelledby="createFileModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-success-subtle">
                <h5 class="modal-title" id="createFileModalLabel">Create Coin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" id="close-modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="id-field">
                <form autocomplete="off" class="needs-validation createfile-form tablelist-form"
                    id="createfile-form" novalidate>
                    <div class="mb-4">
                        <div class="">
                            <label for="coinname-input" class="form-label">Coin Name</label>
                            <input type="text" class="form-control " id="coinname-field" value="" required
                                placeholder="Enter Coin Name" />
                            <div class="invalid-feedback">Please enter a Coin name.</div>
                        </div>
                        <div class="mt-2">
                            <label for="cointage-input" class="form-label">Coin Tage</label>
                            <input type="text" class="form-control " id="cointage-field" value="" required
                                placeholder="Enter Coin Tage" />
                            <div class="invalid-feedback">Please enter a coin tage.</div>
                        </div>
                        <div class="mt-2">
                            <label for="coinprice-input" class="form-label">Coin Price</label>
                            <input type="text" class="form-control " id="coinprice-field" value="" required
                                placeholder="Enter Coin Price" />
                            <div class="invalid-feedback">Please enter a coin parice.</div>
                        </div>
                        <!-- <div class="invalid-feedback">Please enter a file name.</div> -->
                        <input type="hidden" class="form-control" id="coinid-input" value="">
                    </div>
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-ghost-success" data-bs-dismiss="modal"><i
                                class="ri-close-line align-bottom"></i> Close</button>
                        <button type="submit" class="btn btn-primary" id="addNewFile">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- List Js -->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

    <!--list pagination js-->
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
    <!-- crypto-transaction init js -->
    <script src="{{ URL::asset('build/js/pages/crypto-marketplace.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
