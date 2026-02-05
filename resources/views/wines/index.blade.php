@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Wines</h1>

    <a href="{{ route('wines.create') }}" class="btn btn-primary mb-3">Add Wine</a>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Colour</th>
        </tr>
        @foreach($wines as $wine)
        <tr>
            <td>{{ $wine->name }}</td>
            <td>{{ $wine->colour }}</td>
            <td>
                <a href="{{ route('wines.show', $wine) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('wines.edit', $wine) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('wines.destroy', $wine) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
