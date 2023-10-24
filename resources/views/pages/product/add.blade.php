@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Add Product'])
<div class="ms-md-auto pe-md-3 d-flex align-items-center">
    <div class="input-group">
        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
        <input type="text" class="form-control" placeholder="Type here..." onfocus="focused(this)" onfocusout="defocused(this)">
    </div>
</div>
    
@endsection