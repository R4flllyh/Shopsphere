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
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group d-flex justify-content-between align-items-center py-2">
                            <div class="col-4 align-top">
                                <img id="imagePreview" src="{{ asset('img/team-1.jpg') }}" class="rounded shadow-lg p-2 " style="aspect-ratio: 1/1; width: 100%; object-fit: cover;" alt="hero">
                                <div class="form-group pt-4">
                                    <label class="font-weight-bold fs-6" for="project_image">Add Category image</label>
                                    <input class="form-control py-1" type="file" name="project_image">
                                    <p class="description py-1">Give your Category a image (optional)</p>
                                </div>
                            </div>
                            <div class="col-7">
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="product_name">Category name</label>
                                    <input type="text" name="project_name" class="form-control" placeholder="Your Project">
                                    <p class="description py-1">The title must contain a maximum of 50 characters</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold fs-6" for="description">Description and details</label>
                                    <textarea name="project_description" class="form-control" placeholder="Description and detail"></textarea>
                                    <p class="description py-1">Give your product a good description so everyone know what's it for</p>
                                </div>
                            </div>
                            {{-- <div class="col-3">
                                    <img id="imagePreview" src="{{ asset('Flipper.png') }}" class="rounded-circle shadow-lg p-2" style="aspect-ratio: 1/1; width: 100%; object-fit: cover;" alt="hero">
                            </div> --}}
                        </div>
                        <div class="d-flex justify-content-between py-5">
                            <a class="btn btn-danger" href="{{Route('dashboardadm')}}" style="width: 48%"><i class="fi fi-rr-undo me-2"></i> Back</a>
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
