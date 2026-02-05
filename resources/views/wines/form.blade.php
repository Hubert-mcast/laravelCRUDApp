@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $route }}" method="POST">
    @csrf
    @if($method === 'PUT') @method('PUT') @endif

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $wine->name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Colour</label>
        <input type="text" name="type" class="form-control" value="{{ old('type', $wine->type ?? '') }}">
    </div>

    <button class="btn btn-success">Save</button>
    <a href="{{ route('wines.index') }}" class="btn btn-secondary">Cancel</a>
</form>