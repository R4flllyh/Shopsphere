@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Product'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h5 class="mb-0">🔥 Product</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{route('add')}}" class="btn bg-gradient-secondary px-3 mb-0">
                                    <i class="fas fa-plus me-2"></i> Add Product
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 me-sm-0 mx-auto mt-3">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                <span class="ms-2">All Product</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <span class="ms-2">My Products</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                          <a href="javascript:;" class="d-block">
                            <img src="./assets/img/kit/pro/anastasia.jpg" class="img-fluid border-radius-lg">
                          </a>
                        </div>

                        <div class="card-body pt-2">
                          <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Category</span>
                          <a href="javascript:;" class="card-title h5 d-block text-darker">
                            Product Title
                          </a>
                          <p class="card-description mb-4">
                            Use border utilities to quickly style the border
                          </p>
                          <div class="author align-items-center justify-content-between gap-2">
                            <a href="#" class="btn btn-primary mb-0 w-100">See Details</a>
                            <div class="dropdown">
                                <button class="btn btn-secondary mb-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fi fi-rr-menu-burger text-center"></i>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Edit</a></li>
                                  <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                              </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
