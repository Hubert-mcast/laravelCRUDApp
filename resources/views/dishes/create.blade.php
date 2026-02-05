@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create Dish</h1>
    @include('dishes.form', ['route' => route('dishes.store'), 'method' => 'POST'])
</div>
@endsection
