@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="mb-4">Menus</h1>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">Create New Menu</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Appetizer</th>
                <th>Main Course</th>
                <th>Dessert</th>
                <th>Wine</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->appetizerDish->name ?? '-' }}</td>
                <td>{{ $menu->mainDish->name ?? '-' }}</td>
                <td>{{ $menu->dessertDish->name ?? '-' }}</td>
                <td>{{ $menu->wine->name ?? 'No Pairing' }}</td>
                <td>
                    <a href="{{ route('menus.show', $menu) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('menus.edit', $menu) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form action="{{ route('menus.destroy', $menu) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this menu?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
