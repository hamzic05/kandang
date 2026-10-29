<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Kandang Harian</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Public+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex min-h-screen flex-col md:flex-row">

        <!-- Sidebar -->
        @include('admin.partials.sidebar')

        <!-- Akar halaman. Untuk memuat dari server, ganti script JSON dengan data-url="/dashboard/data" -->
        <div class="flex min-w-0 flex-1 flex-col">
            <main data-dashboard data-refresh="0" class="flex flex-1 flex-col gap-[22px] p-4 sm:p-6 xl:px-10 xl:py-8">

                @include('admin.partials.header')

                @yield('content')

            </main>

            @include('admin.partials.footer')


        </div>
    </div>
</body>

</html>