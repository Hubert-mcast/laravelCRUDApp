@extends('layouts.main')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 mb-3">Welcome to the Restaurant site</h1>
    <p class="lead mb-5">
        Manage your menus, dishes, wines, and reviews with ease.
    </p>

    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <a href="{{ route('menus.index') }}" class="btn btn-primary btn-lg w-100">Menus</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('dishes.index') }}" class="btn btn-success btn-lg w-100">Dishes</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('wines.index') }}" class="btn btn-warning btn-lg w-100">Wines</a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="{{ route('reviews.index') }}" class="btn btn-info btn-lg w-100">Reviews</a>
        </div>
    </div>
</div>
@endsection