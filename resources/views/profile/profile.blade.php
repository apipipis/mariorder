@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('content')

@section('page-title')
    <x-breadcrumb pagetitle="Pages" title="Profile" />
@endsection

<div class="card">
    <div class="card-body rounded-top py-5 bg-danger-subtle"
        style="background-image: url('https://img.themesbrand.com/judia/effect-pattern/abc.svg');background-repeat: no-repeat;background-position: right;">
        <div class="py-5 my-2"></div>
    </div>
    <div class="card-body">
        <div class="mt-n5">
            <div class="mt-n2 row g-3 g-sm-0 align-items-end gap-3">

                <div class="col-sm-auto">
                    <div class="position-relative d-inline-block">
                        <img src="https://img.themesbrand.com/judia/users/avatar-1.jpg" alt=""
                            class="avatar-xl rounded p-1 bg-body-secondary">
                        <span class="position-absolute profile-dot bg-success rounded-circle"><span
                                class="visually-hidden">unread messages</span></span>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="mt-4">
                        <h5>Sophia Bethany <i class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                        <p class="text-muted mb-3">Fashion & Graphic Designer</p>
                    </div>
                </div>
                <div class="col-sm-auto mb-3">
                    <div class="hstack gap-2">
                        <button class="btn btn-subtle-success">Hire Now</button>
                        <button type="button" class="btn btn-outline-secondary custom-toggle active"
                            data-bs-toggle="button" aria-pressed="false">
                            <span class="icon-on"><i class="ri-add-line align-bottom me-1"></i> Follow</span>
                            <span class="icon-off"><i class="ri-user-unfollow-line align-bottom me-1"></i>
                                Unfollow</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-lg-4 g-3 mt-2">
            <div class="col-lg-3 col-md-6">
                <div>
                    <p class="text-muted text-uppercase fs-sm mb-1">Location</p>
                    <h6 class="mb-0 lh-base fs-md">Los Angeles, California</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div>
                    <p class="text-muted text-uppercase fs-sm mb-1">Email</p>
                    <h6 class="mb-0 lh-base fs-md"><a href="mailto:sophiabethany@judia.com"
                            class="text-reset">sophiabethany@judia.com</a></h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div>
                    <p class="text-muted text-uppercase fs-sm mb-1">Phone No</p>
                    <h6 class="mb-0 lh-base fs-md"><a href="tel:+(254)6172196245" class="text-reset">+(254) 617 219
                            6245</a></h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div>
                    <p class="text-muted text-uppercase fs-sm mb-1">Website</p>
                    <h6 class="mb-0 lh-base fs-md"><a href="#!" class="text-reset">www.themesbrand.com</a></h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header d-flex align-items-center gap-3">
        <h5 class="card-title mb-0">Enterprise Companies with work</h5>
        <a href="#!" class="icon-link icon-link-hover ms-auto">View All <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="card-body hstack gap-3 flex-wrap">
        <img src="https://img.themesbrand.com/judia/brands/opera.png" alt="" class="avatar-xs">
        <img src="https://img.themesbrand.com/judia/brands/chrome.png" alt="" class="avatar-xs">
        <img src="https://img.themesbrand.com/judia/brands/safari.png" alt="" class="avatar-xs">
        <img src="https://img.themesbrand.com/judia/brands/firefox.png" alt="" class="avatar-xs">
        <img src="https://img.themesbrand.com/judia/brands/microsoft.png" alt="" class="avatar-xs">
        <img src="https://img.themesbrand.com/judia/brands/cloud-computing.png" alt="" class="avatar-xs">
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div class="bg-light p-3 rounded">
                    <div class="nav flex-md-column nav-pills text-center gap-2" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <a class="nav-link active" id="overview-tab" data-bs-toggle="pill" href="#overview"
                            role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                        <a class="nav-link" id="myWallets-tab" data-bs-toggle="pill" href="#myWallets" role="tab"
                            aria-controls="myWallets" aria-selected="false" tabindex="-1">My Wallets</a>
                        <a class="nav-link" id="integration-tab" data-bs-toggle="pill" href="#integration"
                            role="tab" aria-controls="integration" aria-selected="false"
                            tabindex="-1">Integration</a>
                        <a class="nav-link" id="settings-tab" data-bs-toggle="pill" href="#settings" role="tab"
                            aria-controls="settings" aria-selected="false" tabindex="-1">Settings</a>
                        <a class="nav-link" id="changePassword-tab" data-bs-toggle="pill" href="#changePassword"
                            role="tab" aria-controls="changePassword" aria-selected="false"
                            tabindex="-1">Changes Password</a>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-9">
                <div class="tab-content mt-4 mt-md-0" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel"
                        aria-labelledby="overview-tab">
                        <h6 class="card-title">Overview</h6>
                        <p class="text-muted mb-2">A <b>Web Developer</b> creates and designs different websites for
                            clients. They are responsible for their aesthetic as well as their function. Professionals
                            in this field may also need to be able to ensure sites are compatible with multiple types of
                            media. Web Developers need to have a firm understanding of programming and graphical design.
                            Having a strong resume that emphasizes these attributes makes it significantly easier to get
                            hired as a Web Developer.</p>
                        <p class="text-muted">As a web designer, my objective is to make a positive impact on clients,
                            co-workers, and the Internet using my skills and experience to design compelling and
                            attractive websites. Solving code problems. Editing & Design with designing team in the
                            company to build perfect web designs.</p>
                        <h6 class="card-title mb-3">Latest Tasks</h6>
                        <ul class="vstack gap-2 list-unstyled">
                            <li>
                                <div class="p-2 bg-light rounded-1 position-relative hstack gap-2">
                                    <div class="flex-grow-1">
                                        <input class="form-check-input me-2" type="checkbox" name="tasks"
                                            id="tasks1">
                                        <label class="form-check-label stretched-link" for="tasks1">
                                            Contact client for outstanding invoices (Monthly)
                                        </label>
                                    </div>
                                    <p class="text-muted fs-sm mb-0">24 July, 2023</p>
                                    <span class="badge bg-secondary">New</span>
                                </div>
                            </li>
                            <li>
                                <div class="p-2 bg-light rounded-1 position-relative hstack gap-2">
                                    <div class="flex-grow-1">
                                        <input class="form-check-input me-2" type="checkbox" name="tasks"
                                            id="tasks2">
                                        <label class="form-check-label stretched-link" for="tasks2">
                                            Respond to offer question
                                        </label>
                                    </div>
                                    <p class="text-muted fs-sm mb-0">16 Jun, 2023</p>
                                    <span class="badge bg-warning">Pending</span>
                                </div>
                            </li>
                            <li>
                                <div class="p-2 bg-light rounded-1 position-relative hstack gap-2">
                                    <div class="flex-grow-1">
                                        <input class="form-check-input me-2" type="checkbox" name="tasks"
                                            id="tasks3">
                                        <label class="form-check-label stretched-link" for="tasks3">
                                            Update the contact page style
                                        </label>
                                    </div>
                                    <p class="text-muted fs-sm mb-0">23 May, 2023</p>
                                    <span class="badge bg-info">Open</span>
                                </div>
                            </li>
                            <li>
                                <div class="p-2 bg-light rounded-1 position-relative hstack gap-2">
                                    <div class="flex-grow-1">
                                        <input class="form-check-input me-2" type="checkbox" name="tasks"
                                            id="tasks4">
                                        <label class="form-check-label stretched-link" for="tasks4">
                                            Call the design agency to finalize mockups
                                        </label>
                                    </div>
                                    <p class="text-muted fs-sm mb-0">09 Feb, 2023</p>
                                    <span class="badge bg-danger">Close</span>
                                </div>
                            </li>
                        </ul>

                        <div>
                            <h6 class="card-title mb-3">Experience</h6>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="d-flex gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-success-subtle rounded-1">
                                                        <img src="https://img.themesbrand.com/judia/brands/shopify.png"
                                                            alt="shopify" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md">Lead Product Designer</h6>
                                                    </a>
                                                    <p class="text-muted mb-0"><a href="#!">Themesbrand</a>,
                                                        Preset</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="d-flex gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-info-subtle rounded-1">
                                                        <img src="https://img.themesbrand.com/judia/brands/skype.png"
                                                            alt="skype" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md">Product Designer</h6>
                                                    </a>
                                                    <p class="text-muted mb-0"><a href="#!">Web Infract</a>, 2018
                                                        - 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="d-flex gap-2">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <div class="avatar-title bg-success-subtle rounded-1">
                                                        <img src="https://img.themesbrand.com/judia/brands/evernote.png"
                                                            alt="Evernote" class="avatar-xs">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6 class="fs-md">Visual Designer</h6>
                                                    </a>
                                                    <p class="text-muted mb-0"><a href="#!">Judia Infosys</a>,
                                                        2015 - 2018</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>

                        <div>
                            <h6 class="card-title mb-3">Skills</h6>
                            <div class="hstack gap-2 flex-wrap">
                                <span class="badge border border-dark-subtle text-body">Product Design</span>
                                <span class="badge border border-dark-subtle text-body">Design</span>
                                <span class="badge border border-dark-subtle text-body">Team Leaders</span>
                                <span class="badge border border-dark-subtle text-body">Webflow</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="myWallets" role="tabpanel" aria-labelledby="myWallets-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card border bg-secondary border-secondary-subtle">
                                    <div class="card-body">
                                        <h6 class="text-success fs-xs float-end mb-0">
                                            <i class="ph ph-trend-up fs-sm align-middle me-1"></i> +16.09 %
                                        </h6>
                                        <div>
                                            <p
                                                class="text-uppercase fw-medium text-white text-opacity-75 text-truncate fs-sm">
                                                Total Revenue</p>
                                            <h4 class="fw-semibold text-white mb-0">$<span class="counter-value"
                                                    data-target="32697.33">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <h6 class="text-success fs-xs float-end mb-0">
                                            <i class="ph ph-trend-up fs-sm align-middle me-1"></i> +06.25 %
                                        </h6>
                                        <div>
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total
                                                Income</p>
                                            <h4 class="fw-semibold mb-0">$<span class="counter-value"
                                                    data-target="10326.79">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <h6 class="text-danger fs-xs float-end mb-0">
                                            <i class="ph ph-trend-up fs-sm align-middle me-1"></i> +03.17 %
                                        </h6>
                                        <div>
                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Total
                                                Expense</p>
                                            <h4 class="fw-semibold mb-0">$<span class="counter-value"
                                                    data-target="3547.32">0</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="d-flex align-items-center gap-2 flex-wrap mb-3">
                            <h6 class="card-title flex-grow-1 mb-0">Transactions History</h6>
                            <div class="flex-shrink-0">
                                <button class="btn btn-primary">View All</button>
                            </div>
                        </div>
                        <div id="transactionsList">
                            <div class="table-responsive">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col" class="sort cursor-pointer" data-sort="date">Date</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="transactions">
                                                transactions</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="coinName">Coin
                                            </th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="type">Type</th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="amount">Amount
                                            </th>
                                            <th scope="col" class="sort cursor-pointer" data-sort="status">Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="date">
                                                27 Feb, 2023
                                            </td>
                                            <td class="transactions">
                                                <a href="#!" class="fw-medium link-primary">#TBJ250011</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/btc.svg"
                                                        alt="" class="avatar-xxs rounded-circle">
                                                    <a href="#!" class="text-reset fw-medium coinName">BTC</a>
                                                </div>
                                            </td>
                                            <td class="type">
                                                Exchange Currency
                                            </td>
                                            <td class="amount">
                                                <span class="fw-medium">1.59 BTC</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-success-subtle text-success">Successfully</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="date">
                                                16 Feb, 2023
                                            </td>
                                            <td class="transactions">
                                                <a href="#!" class="fw-medium link-primary">#TBJ250010</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/eth.svg"
                                                        alt="" class="avatar-xxs rounded-circle">
                                                    <a href="#!" class="text-reset fw-medium coinName">ETH</a>
                                                </div>
                                            </td>
                                            <td class="type">
                                                Buy
                                            </td>
                                            <td class="amount">
                                                <span class="fw-medium">352 USD</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-warning-subtle text-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="date">
                                                30 Jan, 2023
                                            </td>
                                            <td class="transactions">
                                                <a href="#!" class="fw-medium link-primary">#TBJ250009</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/ltc.svg"
                                                        alt="" class="avatar-xxs rounded-circle">
                                                    <a href="#!" class="text-reset fw-medium coinName">LTC</a>
                                                </div>
                                            </td>
                                            <td class="type">
                                                Buy
                                            </td>
                                            <td class="amount">
                                                <span class="fw-medium">3.21 BTC</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-success-subtle text-success">Successfully</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="date">
                                                25 Jan, 2023
                                            </td>
                                            <td class="transactions">
                                                <a href="#!" class="fw-medium link-primary">#TBJ250008</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/btc.svg"
                                                        alt="" class="avatar-xxs rounded-circle">
                                                    <a href="#!" class="text-reset fw-medium coinName">BTC</a>
                                                </div>
                                            </td>
                                            <td class="type">
                                                Sell
                                            </td>
                                            <td class="amount">
                                                <span class="fw-medium">4.59 BTC</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-danger-subtle text-danger">Cancelled</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="date">
                                                28 May, 2023
                                            </td>
                                            <td class="transactions">
                                                <a href="#!" class="fw-medium link-primary">#TBJ250007</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/ast.svg"
                                                        alt="" class="avatar-xxs rounded-circle">
                                                    <a href="#!" class="text-reset fw-medium coinName">AST</a>
                                                </div>
                                            </td>
                                            <td class="type">
                                                Exchange Currency
                                            </td>
                                            <td class="amount">
                                                <span class="fw-medium">178.39 USD</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-success-subtle text-success">Successfully</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="date">
                                                11 April, 2023
                                            </td>
                                            <td class="transactions">
                                                <a href="#!" class="fw-medium link-primary">#TBJ250006</a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://img.themesbrand.com/judia/svg/crypto-icons/eth.svg"
                                                        alt="" class="avatar-xxs rounded-circle">
                                                    <a href="#!" class="text-reset fw-medium coinName">ETH</a>
                                                </div>
                                            </td>
                                            <td class="type">
                                                Buy
                                            </td>
                                            <td class="amount">
                                                <span class="fw-medium">36.19 ETH</span>
                                            </td>
                                            <td class="status">
                                                <span class="badge bg-warning-subtle text-warning">Pending</span>
                                            </td>
                                        </tr>
                                    </tbody><!-- end tbody -->
                                </table>
                            </div>
                            <div class="align-items-center mt-4 row">
                                <div class="col-sm">
                                    <div class="text-muted text-center text-sm-start">
                                        Showing <span class="fw-semibold">04</span> of <span
                                            class="fw-semibold">07</span> Results
                                    </div>
                                </div>
                                <div class="col-sm-auto mt-3 mt-sm-0">
                                    <div class="pagination-wrap pagination-sm hstack gap-2 justify-content-center">
                                        <a class="page-item pagination-prev disabled" href="javascript:void(0)">
                                            <i class="bi bi-arrow-left"></i>
                                        </a>
                                        <ul class="pagination listjs-pagination mb-0"></ul>
                                        <a class="page-item pagination-next" href="javascript:void(0)">
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="integration" role="tabpanel" aria-labelledby="integration-tab">
                        <h6 class="card-title">Integration</h6>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault10">
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-danger-subtle rounded-1">
                                                <img src="https://img.themesbrand.com/judia/brands/gitlab.png"
                                                    alt="gitlab" class="avatar-xxs">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="fs-lg">Gitlab</h5>
                                            <p class="text-muted mb-0">GitLab is an open source code repository and
                                                collaborative software development platform for large DevOps and
                                                DevSecOps projects.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault2">
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-primary-subtle rounded-1">
                                                <img src="https://img.themesbrand.com/judia/brands/twitch.png"
                                                    alt="twitch" class="avatar-xxs">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="fs-lg">Twitch</h5>
                                            <p class="text-muted mb-0">Twitch is an American video live streaming
                                                service that focuses on video game live streaming, including broadcasts
                                                of esports competitions, in addition to offering.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault3">
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-info-subtle rounded-1">
                                                <img src="https://img.themesbrand.com/judia/brands/dropbox.png"
                                                    alt="dropbox" class="avatar-xxs">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="fs-lg">Dropbox</h5>
                                            <p class="text-muted mb-0">Dropbox is a file hosting service operated by
                                                the American company Dropbox, Inc., headquartered in San Francisco,
                                                California, U.S. that offers cloud synchronization</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault4">
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-success-subtle rounded-1">
                                                <img src="https://img.themesbrand.com/judia/brands/shopify.png"
                                                    alt="shopify" class="avatar-xxs">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="fs-lg">Shopify</h5>
                                            <p class="text-muted mb-0">Shopify Inc. is a Canadian multinational
                                                e-commerce company headquartered in Ottawa, Ontario. Shopify is the name
                                                of its proprietary e-commerce platform.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault5">
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-danger-subtle rounded-1">
                                                <img src="https://img.themesbrand.com/judia/brands/slack.png"
                                                    alt="slack" class="avatar-xxs">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="fs-lg">Slack</h5>
                                            <p class="text-muted mb-0">Slack is an instant messaging program designed
                                                by Slack Technologies and owned by Salesforce. Although Slack was
                                                professional and organizational.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault6">
                                        </div>
                                        <div class="avatar-sm">
                                            <div class="avatar-title bg-secondary-subtle rounded-1">
                                                <img src="https://img.themesbrand.com/judia/brands/safari.png"
                                                    alt="dropbox" class="avatar-xxs">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <h5 class="fs-lg">Safari</h5>
                                            <p class="text-muted mb-0">Safari is a web browser developed by Apple. It
                                                is built into Apple's operating systems, including macOS, iOS, and
                                                iPadOS, and uses Apple's open-source browser engine.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <h6 class="card-title mb-3">Profile Settings</h6>
                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto">
                                <img src="https://img.themesbrand.com/judia/users/avatar-1.jpg" alt=""
                                    id="profile-img"
                                    class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
                                <div
                                    class="avatar-xs p-0 rounded-circle profile-photo-edit position-absolute end-0 bottom-0">
                                    <input id="profile-img-file-input" type="file"
                                        class="profile-img-file-input d-none">
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        <span class="avatar-title rounded-circle bg-light text-body cursor-pointer">
                                            <i class="bi bi-camera"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <h5>Richard Marshall <i
                                        class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                                <p class="text-muted">Fashion & Graphic Designer</p>
                            </div>
                        </div>
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="firstnameInput" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstnameInput"
                                            placeholder="Enter your firstname" value="Sophia">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lastnameInput" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastnameInput"
                                            placeholder="Enter your last name" value="Bethany">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phonenumberInput" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phonenumberInput"
                                            placeholder="Enter your phone number" value="+(254) 617 219 6245">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="emailInput" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="emailInput"
                                            placeholder="Enter your email" value="sophiabethany@judia.com">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="birthDateInput" class="form-label">Birth of Date</label>
                                        <input type="text" class="form-control flatpickr-input"
                                            data-provider="flatpickr" id="birthDateInput" data-date-format="d M, Y"
                                            data-default-date="24 June, 1998" placeholder="Select date"
                                            readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="JoiningdatInput" class="form-label">Joining Date</label>
                                        <input type="text" class="form-control flatpickr-input"
                                            data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y"
                                            data-default-date="30 Oct, 2023" placeholder="Select date"
                                            readonly="readonly">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="skillsInput" class="form-label">Skills</label>
                                        <select class="form-control" name="skillsInput" data-choices
                                            data-choices-text-unique-true multiple id="skillsInput">
                                            <option value="illustrator">Illustrator</option>
                                            <option value="photoshop">Photoshop</option>
                                            <option value="css">CSS</option>
                                            <option value="html">HTML</option>
                                            <option value="javascript" selected>Javascript</option>
                                            <option value="python">Python</option>
                                            <option value="php">PHP</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="designationInput" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="designationInput"
                                            placeholder="Designation" value="Fashion & Graphic Designer">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="websiteInput1" class="form-label">Website</label>
                                        <input type="text" class="form-control" id="websiteInput1"
                                            placeholder="www.example.com" value="www.themesbrand.com">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="cityInput" class="form-label">City</label>
                                        <input type="text" class="form-control" id="cityInput" placeholder="City"
                                            value="Los Angeles">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="countryInput" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="countryInput"
                                            placeholder="Country" value="California">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="zipcodeInput" class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" minlength="5" maxlength="6"
                                            id="zipcodeInput" placeholder="Enter zipcode" value="00012">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="mb-3 pb-2">
                                        <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea" placeholder="Enter your description" rows="5">A Web Developer creates and designs different websites for clients. They are responsible for their aesthetic as well as their function. Professionals in this field may also need to be able to ensure sites are compatible with multiple types of media. Web Developers need to have a firm understanding of programming and graphical design. Having a strong resume that emphasizes these attributes makes it significantly easier to get hired as a Web Developer. As a web designer, my objective is to make a positive impact on clients, co-workers, and the Internet using my skills and experience to design compelling and attractive websites. Solving code problems. Editing &amp; Design with designing team in the company to build perfect web designs.</textarea>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-12">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">Updates</button>
                                        <button type="button" class="btn btn-subtle-danger">Cancel</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="changePassword" role="tabpanel"
                        aria-labelledby="changePassword-tab">
                        <h6 class="card-title mb-3">Changes Password</h6>
                        <form action="#!">
                            <div class="row g-2 justify-content-lg-between align-items-center">
                                <div class="col-lg-4">
                                    <div class="auth-pass-inputgroup">
                                        <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control password-input"
                                                id="oldpasswordInput" placeholder="Enter current password">
                                            <button
                                                class="btn btn-link position-absolute top-0 end-0 text-decoration-none text-muted password-addon"
                                                type="button"><i class="ri-eye-fill align-middle"></i></button>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="auth-pass-inputgroup">
                                        <label for="password-input" class="form-label">New Password*</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control password-input"
                                                id="password-input" onpaste="return false"
                                                placeholder="Enter new password"
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="auth-pass-inputgroup">
                                        <label for="confirm-password-input" class="form-label">Confirm
                                            Password*</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control password-input"
                                                onpaste="return false" id="confirm-password-input"
                                                placeholder="Confirm password"
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                                            <button
                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                type="button"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="link-primary text-decoration-underline">Forgot Password ?</a>
                                    <div class="">

                                        <button type="submit" class="btn btn-success">Change Password</button>
                                    </div>
                                </div>

                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="card bg-light shadow-none passwd-bg" id="password-contain">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <h5 class="fs-sm">Password must contain:</h5>
                                            </div>
                                            <div class="">
                                                <p id="pass-length" class="invalid fs-xs mb-2">Minimum <b>8
                                                        characters</b></p>
                                                <p id="pass-lower" class="invalid fs-xs mb-2">At <b>lowercase</b>
                                                    letter (a-z)</p>
                                                <p id="pass-upper" class="invalid fs-xs mb-2">At least
                                                    <b>uppercase</b> letter (A-Z)
                                                </p>
                                                <p id="pass-number" class="invalid fs-xs mb-0">A least <b>number</b>
                                                    (0-9)</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--end row-->
                        </form>
                        <div class="mt-4 mb-4 pb-3 border-bottom d-flex justify-content-between align-items-center">
                            <h5 class="card-title  mb-0">Login History</h5>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-secondary">All Logout</button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-borderless align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">IP Address</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Address</th>
                                                <th scope="col"><i class="ri-logout-box-r-line"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><i class="bi bi-phone align-baseline me-1"></i> iPhone 12 Pro</td>
                                                <td>192.44.234.160</td>
                                                <td>18 Dec, 2023</td>
                                                <td>Los Angeles, United States</td>
                                                <td><a href="#" class="icon-link icon-link-hover">Logout <i
                                                            class="bi bi-box-arrow-right"></i></a></td>

                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-tablet align-baseline me-1"></i> Apple iPad Pro
                                                </td>
                                                <td>192.44.234.162</td>
                                                <td>03 Jan, 2023</td>
                                                <td>Phoenix, United States</td>
                                                <td><a href="#" class="icon-link icon-link-hover">Logout <i
                                                            class="bi bi-box-arrow-right"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-phone align-baseline me-1"></i> Galaxy S21 Ultra 5G
                                                </td>
                                                <td>192.45.234.54</td>
                                                <td>25 Feb, 2023</td>
                                                <td>Washington, United States</td>
                                                <td><a href="#" class="icon-link icon-link-hover">Logout <i
                                                            class="bi bi-box-arrow-right"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-laptop align-baseline me-1"></i> Dell Inspiron 14
                                                </td>
                                                <td>192.40.234.32</td>
                                                <td>16 Oct, 2022</td>
                                                <td>Phoenix, United States</td>
                                                <td><a href="#" class="icon-link icon-link-hover">Logout <i
                                                            class="bi bi-box-arrow-right"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-phone align-baseline me-1"></i> iPhone 12 Pro</td>
                                                <td>192.44.326.42</td>
                                                <td>22 May, 2022</td>
                                                <td>Conneticut, United States</td>
                                                <td><a href="#" class="icon-link icon-link-hover">Logout <i
                                                            class="bi bi-box-arrow-right"></i></a></td>

                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-tablet align-baseline me-1"></i> Apple iPad Pro
                                                </td>
                                                <td>190.44.182.33</td>
                                                <td>19 Nov, 2023</td>
                                                <td>Los Angeles, United States</td>
                                                <td><a href="#" class="icon-link icon-link-hover">Logout <i
                                                            class="bi bi-box-arrow-right"></i></a></td>

                                            </tr>

                                            <tr>
                                                <td><i class="bi bi-phone align-baseline me-1"></i> Galaxy S21 Ultra 5G
                                                </td>
                                                <td>194.44.235.87</td>
                                                <td>30 Aug, 2022</td>
                                                <td>Conneticut, United States</td>
                                                <td><a href="#" class="icon-link icon-link-hover">Logout <i
                                                            class="bi bi-box-arrow-right"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--  end col -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
<!--list js-->
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>

<!-- password-create init -->
<script src="{{ URL::asset('build/js/pages/passowrd-create.init.js') }}"></script>

<!--profile init js-->
<script src="{{ URL::asset('build/js/pages/profile.init.js') }}"></script>

<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
