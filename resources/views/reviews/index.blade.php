@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Reviews</h1>

    <a href="{{ route('reviews.create') }}" class="btn btn-primary mb-3">Add Review</a>

    <table class="table table-bordered">
        <tr>
            <th>Menu</th>
            <th>Rating</th>
            <th>Body</th>
            <th>Actions</th>
        </tr>
        @foreach($reviews as $review)
        <tr>
            <td>{{ $review->menu->name ?? 'N/A' }}</td>
            <td>{{ $review->rating }}/5</td>
            <td>{{ $review->body}}</td>
            <td>
                <a href="{{ route('reviews.show', $review) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('reviews.edit', $review) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('reviews.destroy', $review) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
