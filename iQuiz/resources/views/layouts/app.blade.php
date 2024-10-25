<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TailAdmin')</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-r0dOv5VWXKpZGz7wLZBdyD8HmrAEblgD6OUYF6jL6FdqTEUdT2jVJyzf5FQ30W+UE8dT5G0TgMmnOnibozVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 font-satoshi">

    @include('partials.sidebar')

    <section class="home">

        @include('partials.header')
        @yield('content')

    </section>

    <div class="mode-switch">
        <i class='bx bx-moon icon moon'></i>
        <i class='bx bx-sun icon sun'></i>
    </div>  

    <!-- Vite JavaScript assets -->
    @vite('resources/js/app.js')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
