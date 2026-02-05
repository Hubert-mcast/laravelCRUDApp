@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit Review</h1>
    @include('review.form', ['route' => route('review.update', $dish), 'method' => 'PUT'])
</div>
@endsection