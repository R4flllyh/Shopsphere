@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('title', 'Detail User')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Detail User'])
<div class="card">
    <form role="form" enctype="multipart/form-data">
        @csrf
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Detail User</p>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">User Detail</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Username</label>
                        <input class="form-control" type="text" name="username" value="{{ $user->username }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email address</label>
                        <input class="form-control" type="email" name="email" value="{{ $user->email }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">First name</label>
                        <input class="form-control" type="text" name="firstname"  value="{{ $user->firstname }}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Last name</label>
                        <input class="form-control" type="text" name="lastname" value="{{ $user->lastname }}" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Role</label>
                        <input class="form-control" type="text" name="role" value="{{ $user->role }}" readonly>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Contact Information</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Address</label>
                        <input class="form-control" type="text" name="address"
                            value="{{ $user->address }}" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">City</label>
                        <input class="form-control" type="text" name="city" value="{{ $user->city }}" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Country</label>
                        <input class="form-control" type="text" name="country" value="{{ $user->country }}" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Postal code</label>
                        <input class="form-control" type="text" name="postal" value="{{ $user->postal }}" readonly>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">About me</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">About me</label>
                        <input class="form-control" type="text" name="about"
                            value="{{ $user->about }}" readonly>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection