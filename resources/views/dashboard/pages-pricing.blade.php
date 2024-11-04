@extends('layouts.master')
@section('title')
    Harga
@endsection
@section('content')

@section('page-title')
    
@endsection


<div class="row justify-content-center mt-4">
    <div class="col-lg-5">
        <div class="text-center mb-5">
            <h4 class="fw-semibold fs-4xl text-white">Plans & Pricing</h4>
            <p class="text-muted mb-4 fs-base">Simple pricing. No hidden fees. Advanced features for you business.</p>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row" style="">
    <div class="col-xxl-3 col-lg-6">
        <div class="card card-animate border-top border-2 border-success rounded-0 rounded-bottom">
            <div class="card-body m-2 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">Starter</h5>
                    </div>
                    <div class="ms-auto">
                        <h2 class="mb-0">$19 <small class="fs-sm text-muted">/Month</small></h2>
                    </div>
                </div>

                <p class="text-muted">The perfect way to get started and get used to our tools.</p>
                <ul class="list-unstyled vstack gap-3">
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>3</b> Projects
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>299</b> Customers
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                Scalable Bandwidth
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>5</b> FTP Login
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-3 pt-2">
                    <a href="javascript:void(0);" class="btn btn-danger disabled w-100">Your Current Plan</a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->

    
    <!--end col-->

    <div class="col-xxl-3 col-lg-6">
        <div class="card card-animate border-top border-2 border-primary rounded-0 rounded-bottom">
            <div class="card-body m-2 p-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-semibold">Enterprise</h5>
                    </div>
                    <div class="ms-auto">
                        <h2 class="mb-0">$39 <small class="fs-sm text-muted">/Month</small></h2>
                    </div>
                </div>
                <p class="text-muted">This plan is for those who have a team already and running a large business.</p>
                <ul class="list-unstyled vstack gap-3">
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>15</b> Projects
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>Unlimited</b> Customers
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                Scalable Bandwidth
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>12</b> FTP Login
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>24/7</b> Support
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex">
                            <div class="flex-shrink-0 text-success me-1">
                                <i class="ri-checkbox-circle-fill fs-base align-middle"></i>
                            </div>
                            <div class="flex-grow-1">
                                <b>35GB</b> Storage
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="mt-3 pt-2">
                    <a href="javascript:void(0);" class="btn btn-info w-100">Change Plan</a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!-- end row -->
@endsection
@section('scripts')
<!-- App js -->
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
