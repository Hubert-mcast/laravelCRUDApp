@extends('layouts.main')

@section('content')
<div class="container">

    <ul class="list-group">
        <li class="list-group-item"><strong>Menu:</strong> {{ $review->menu->name ?? 'N/A' }}</li>
        <li class="list-group-item"><strong>Rating:</strong> {{ $review->rating }}/5</li>
        <li class="list-group-item"><strong>Body:</strong><br>{{ $review->body }}</li>
    </ul>

    <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning mt-3">Edit</a>
    <a href="{{ route('reviews.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
