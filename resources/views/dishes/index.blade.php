@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Dishes</h1>

    <a href="{{ route('dishes.create') }}" class="btn btn-primary mb-3">Add Dish</a>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach($dishes as $dish)
        <tr>
            <td>{{ $dish->name }}</td>
            <td>{{ $dish->description }}</td>
            <td>${{ number_format($dish->price, 2) }}</td>
            <td>
                <a href="{{ route('dishes.show', $dish) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('dishes.edit', $dish) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('dishes.destroy', $dish) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
