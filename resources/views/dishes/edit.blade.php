@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit Dish</h1>
    @include('dishes.form', ['route' => route('dishes.update', $dish), 'method' => 'PUT'])
</div>
@endsection
