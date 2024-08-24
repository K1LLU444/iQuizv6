<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TailAdmin')</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js" integrity="sha512-r0dOv5VWXKpZGz7wLZBdyD8HmrAEblgD6OUYF6jL6FdqTEUdT2jVJyzf5FQ30W+UE8dT5G0TgMmnOnibozVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 font-satoshi">
    <div class="flex">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <div class="flex-1">
            <!-- Header -->
            @include('partials.header', ['headerTitle' => $headerTitle ?? 'Default Title']) <!-- Pass headerTitle to the header partial -->


            <!-- Main content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Vite JavaScript assets -->
    @vite('resources/js/app.js')
</body>
</html>
