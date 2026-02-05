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
    @if($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label>Menu Name</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $menu->name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Appetizer</label>
        <select name="appetizer" class="form-control" required>
            @foreach($dishes as $id => $name)
                <option value="{{ $id }}" @selected(old('appetizer', $menu->appetizer ?? '') == $id)>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Main Course</label>
        <select name="main_course" class="form-control" required>
            @foreach($dishes as $id => $name)
                <option value="{{ $id }}" @selected(old('main_course', $menu->main_course ?? '') == $id)>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Dessert</label>
        <select name="dessert" class="form-control" required>
            @foreach($dishes as $id => $name)
                <option value="{{ $id }}" @selected(old('dessert', $menu->dessert ?? '') == $id)>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Wine Pairing</label>
        <select name="wine_pairing" class="form-control">
            @foreach($wines as $id => $name)
                <option value="{{ $id }}" @selected(old('wine_pairing', $menu->wine_pairing ?? '') == $id)>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success">Save Menu</button>
    <a href="{{ route('menus.index') }}" class="btn btn-secondary">Cancel</a>
</form>