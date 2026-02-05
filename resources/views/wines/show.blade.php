@extends('layouts.main')

@section('content')
<div class="container">
    <h1>{{ $wine->name }}</h1>

    <ul class="list-group">
        <li class="list-group-item"><strong>Colour:</strong> {{ $wine->colour }}</li>
    </ul>

    <a href="{{ route('wines.edit', $wine) }}" class="btn btn-warning mt-3">Edit</a>
    <a href="{{ route('wines.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
