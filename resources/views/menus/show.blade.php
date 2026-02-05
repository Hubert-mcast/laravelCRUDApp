@extends('layouts.main')

@section('content')
<div class="container">
    <h1>{{ $menu->name }}</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Appetizer:</strong> {{ $menu->appetizerDish->name }}</li>
        <li class="list-group-item"><strong>Main Course:</strong> {{ $menu->mainDish->name }}</li>
        <li class="list-group-item"><strong>Dessert:</strong> {{ $menu->dessertDish->name }}</li>
        <li class="list-group-item"><strong>Wine Pairing:</strong> {{ $menu->wine->name ?? 'No Pairing' }}</li>
    </ul>

    <a href="{{ route('menus.edit', $menu) }}" class="btn btn-warning mt-3">Edit</a>
    <a href="{{ route('menus.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection