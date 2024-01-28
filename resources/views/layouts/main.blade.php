<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Surya Blog | {{ $title }}</title>
</head>
<body>
    
    @include('partials.navbar')
    
    <div class="container mt-3">
        @yield('container')
    </div>
    
    
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>