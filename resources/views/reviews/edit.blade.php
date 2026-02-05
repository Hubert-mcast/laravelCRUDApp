@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit Review</h1>
    @include('reviews.form', ['route' => route('reviews.update', $review), 'method' => 'PUT'])
</div>
@endsection