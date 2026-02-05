@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create Review</h1>
    @include('reviews.form', ['route' => route('reviews.store'), 'method' => 'POST'])
</div>
@endsection