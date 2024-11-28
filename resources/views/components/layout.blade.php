<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">

  <div class="min-h-full flex flex-col lg:flex-row"> <!-- Add flex-col for mobile and lg:flex-row for large screens -->
    <!-- Sidebar -->
    <x-sidebar class="w-full lg:w-64 bg-gray-800 text-white"> <!-- Full width on mobile and fixed width on large screens -->
    </x-sidebar> 

    <!-- Main Content Area -->
    <div class="flex-1 lg:ml-64 mt-16"> <!-- Add margin for sidebar on larger screens and margin-top for header -->
        <x-navbar>  </x-navbar>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
  </div>

</body>
</html>
