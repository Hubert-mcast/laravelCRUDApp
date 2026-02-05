@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit Menu</h1>
    @include('menus.form', ['route' => route('menus.update', $menu), 'method' => 'PUT'])
</div>
@endsection