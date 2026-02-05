@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create Wine</h1>
    @include('wines.form', ['route' => route('wines.store'), 'method' => 'POST'])
</div>
@endsection
