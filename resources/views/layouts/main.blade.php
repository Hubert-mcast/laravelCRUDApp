<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Restaurant App') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Optional: custom styles --}}
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
    </style>

    @stack('styles')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Restaurant</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('menus.*') ? 'active' : '' }}"
                       href="{{ route('menus.index') }}">Menus</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dishes.*') ? 'active' : '' }}"
                       href="{{ route('dishes.index') }}">Dishes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('wines.*') ? 'active' : '' }}"
                       href="{{ route('wines.index') }}">Wines</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('reviews.*') ? 'active' : '' }}"
                       href="{{ route('reviews.index') }}">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="bg-dark text-light mt-5 py-3">
    <div class="container text-center">
        <small>
          {{ date('Y') }} Restaurant App
        </small>
    </div>
</footer>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')
</body>
</html>
