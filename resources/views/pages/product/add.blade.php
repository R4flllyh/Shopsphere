@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Add Product'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                            <h5 class="mb-0">🔥 Add Product</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group d-flex justify-content-between py-2">
                            <div class="col-4 align-top">
                                <img id="imagePreview" src="{{ asset('img/team-1.jpg') }}" class="rounded shadow-lg p-2 " style="aspect-ratio: 1/1; width: 100%; object-fit: cover;" alt="hero">
                                <div class="form-group pt-4">
                                    <label class="font-weight-bold fs-6" for="photo">Add Product image</label>
                                    <input class="form-control py-1" type="file" name="photo">
                                    <p class="description py-1">Give your product a image (optional)</p>
                                </div>
                            </div>
                            <input type="text" value="{{ Auth()->user()->id }}" name="user_id" hidden>
                            <div class="col-7">
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="name">Product name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Your Product Name">
                                    <p class="description py-1">The title must contain a maximum of 50 characters</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="description">Description and details</label>
                                    <textarea name="description" class="form-control" placeholder="Description and detail"></textarea>
                                    <p class="description py-1">Give your product a good description so everyone know what's it for</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="category_id">Category</label>
                                    <select class="form-control" name="category_id" placeholder="Pilih">
                                        <option selected>Choose</option>
                                        @foreach ($c as $item)    
                                        <option value="{{ $item->id }}" name="category_id">{{ $item->category }}</option>
                                        @endforeach
                                    </select>
                                    <p class="description py-1">Give your product a category so everyone know What category does the product fall into</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold fs-6" for="harga">Price</label>
                                            <div class="input-group w-100">
                                              <span class="input-group-text">Rp</span>
                                              <input type="text" class="form-control" name="harga" aria-label="Amount (to the nearest rupiah)">
                                              <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-weight-bold fs-6" for="diskon">Discount</label>
                                            <div class="input-group w-100">
                                              <span class="input-group-text">%</span>
                                              <input type="text" class="form-control" name="diskon" aria-label="Amount (to the nearest rupiah)">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="description py-1">Give your product a price and discount so everyone know Prices and discounts on such products</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="stock">Stock</label>
                                    <input type="number" id="datemax" name="stock" class="form-control" placeholder="Product stocks">
                                    <p class="description py-1">Give your product a stocks so everyone know When your product is out of stock or still available</p>
                                </div>
                            </div>
                            {{-- <div class="col-3">
                                    <img id="imagePreview" src="{{ asset('Flipper.png') }}" class="rounded-circle shadow-lg p-2" style="aspect-ratio: 1/1; width: 100%; object-fit: cover;" alt="hero">
                            </div> --}}
                        </div>
                        <div class="d-flex justify-content-between py-5">
                            <a class="btn btn-danger" href="{{Route('dashboard-admin')}}" style="width: 48%"><i class="fi fi-rr-undo me-2"></i> Back</a>
                            <button type="submit" class="btn btn-primary" style="width: 48%"><i class="fi fi-rr-add-folder me-2"></i> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>

@endsection
