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
        <label>Menu</label>
        <select name="menu_id" class="form-control" required>
            @foreach($menus as $id => $name)
                <option value="{{ $id }}" @selected(old('menu_id', $review->menu_id ?? '') == $id)>{{ $name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Rating</label>
        <input type="number" name="rating" min="1" max="5" class="form-control" value="{{ old('rating', $review->rating ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Body</label>
        <textarea name="body" class="form-control" required>{{ old('comment', $review->comment ?? '') }}</textarea>
    </div>

    <button class="btn btn-success">Save</button>
    <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Cancel</a>
</form>
