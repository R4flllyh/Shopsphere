@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Category'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h5 class="mb-0">🔥 Category</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{route('category-add')}}" class="btn bg-gradient-secondary px-3 mb-0">
                                    <i class="fas fa-plus me-2"></i> Add Category
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($c as $item)    
            <div class="col-12 mt-4">
                <div class="card d-flex" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->category }}</h5>
                        <div class="d-flex justify-content-between gap-2">
                            <a href="{{ route('category-detail', $item->id) }}" class="btn btn-primary mb-0 w-100">Detail</a>
                            <a href="{{ route('category-edit', $item->id) }}" class="btn btn-info mb-0"><i class="fi fi-rr-settings"></i></a>
                            <form action="{{ route('category-destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mb-0" type="submit"><i class="fi fi-rr-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
