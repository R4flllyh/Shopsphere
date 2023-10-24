@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('title', 'Edit User')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit User'])
<div class="card">
    <form role="form" method="POST" action={{ route('user-management.update') }} enctype="multipart/form-data">
        @csrf
        <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
            </div>
        </div>
        <div class="card-body">
            <p class="text-uppercase text-sm">User Information</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Username</label>
                        <input class="form-control" type="text" name="username" value="{{ $user->username }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email address</label>
                        <input class="form-control" type="email" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">First name</label>
                        <input class="form-control" type="text" name="firstname"  value="{{ $user->firstname }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Last name</label>
                        <input class="form-control" type="text" name="lastname" value="{{ $user->lastname }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Role</label>
                        <select class="form-control" name="role" id="">
                            <option value="">Select Role</option>
                            <option value="admin" @if($user->role === 'admin') selected @endif>Admin</option>
                            <option value="user"@if($user->role === 'user') selected @endif>User</option>
                        </select>
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
                            value="{{ $user->address }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">City</label>
                        <input class="form-control" type="text" name="city" value="{{ $user->city }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Country</label>
                        <input class="form-control" type="text" name="country" value="{{ $user->country }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Postal code</label>
                        <input class="form-control" type="text" name="postal" value="{{ $user->postal }}">
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
                            value="{{ $user->about }}">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection