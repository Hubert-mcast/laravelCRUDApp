<html>
    <title>CRUD App</title>

    <div>
        <li><a href="{{ route('menus.index') }}">All Menus</a></li>
        <li><a href="{{ route('menus.create') }}">Add Menu</a></li>

        <li><a href="{{ route('dishes.index') }}">All Dishes</a></li>
        <li><a href="{{ route('dishes.create') }}">Add dish</a></li>

        <li><a href="{{ route('wines.index') }}">All Wines</a></li>
        <li><a href="{{ route('wines.create') }}">Add Wine</a></li>

        <li><a href="{{ route('reviews.index') }}">All Reviews</a></li>
        <li><a href="{{ route('reviews.create') }}">Add Review</a></li>
    </div>
</html>