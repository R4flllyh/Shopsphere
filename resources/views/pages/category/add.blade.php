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
                            <h5 class="mb-0">🔥 Add Category</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('category-post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group d-flex justify-content-between align-items-center py-2">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="category">Category name</label>
                                    <input type="text" name="category" class="form-control" placeholder="Category">
                                    <p class="description py-1">The title must contain a minimum of 3 characters</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="desc_category">Description and details</label>
                                    <textarea name="desc_category" class="form-control" placeholder="Description and detail"></textarea>
                                    <p class="description py-1">Give detail about this category</p>
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
