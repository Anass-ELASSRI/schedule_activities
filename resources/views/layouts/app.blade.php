<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Add Livewire Styles -->
    @livewireStyles

    <!-- Add CSS Files (If Any) -->
    @vite('resources/css/app.css') <!-- Include Tailwind CSS -->
</head>

<body>
    <div class="container mx-auto p-4">
        @yield('content')
    </div>

    <!-- Add Livewire Scripts -->
    @livewireScripts

    <!-- Add JS Files (If Any) -->
    @vite('resources/js/app.js')
</body>

</html>
