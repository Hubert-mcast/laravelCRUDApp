@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit Wine</h1>
    @include('wines.form', ['route' => route('wines.update', $wine), 'method' => 'PUT'])
@endsection
