@extends('layouts.main')

@section('content')
<div class="container">
    <h1>{{ $dish->name }}</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Description:</strong> {{ $dish->description }}</li>
        <li class="list-group-item"><strong>Price:</strong> ${{ number_format($dish->price, 2) }}</li>
    </ul>

    <a href="{{ route('dishes.edit', $dish) }}" class="btn btn-warning mt-3">Edit</a>
    <a href="{{ route('dishes.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
