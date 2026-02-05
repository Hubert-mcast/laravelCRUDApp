@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Create Menu</h1>
    @include('menus.form', ['route' => route('menus.store'), 'method' => 'POST'])
</div>
@endsection