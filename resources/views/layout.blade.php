<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitAcademy</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="app-body">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- MAIN CONTENT --}}
    <main>
        @yield('content')
    </main>

</body>
</html>
