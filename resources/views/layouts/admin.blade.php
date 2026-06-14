<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') - Sawit Prima Organik</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700|montserrat:500,600,700,800,900" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Scripts and Styles -->
    @php
        $isProduction = app()->environment('production');
        $manifestPath = $isProduction ? '../public_html/build/manifest.json' : public_path('build/manifest.json');
    @endphp
    
    @if ($isProduction && file_exists($manifestPath))
    @php
        $manifest = json_decode(file_get_contents($manifestPath), true);
    @endphp
        <link rel="stylesheet" href="{{ config('app.url') }}/build/{{ $manifest['resources/css/app.css']['file'] }}">
        <script type="module" src="{{ config('app.url') }}/build/{{ $manifest['resources/js/app.js']['file'] }}"></script>
    @else
        @viteReactRefresh
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    @endif
    
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('styles')
</head>
<body class="font-body bg-background text-dark antialiased" x-data="{ sidebarOpen: false }">
    <div class="flex min-h-screen w-full">
        <!-- Sidebar -->
        @include('admin.partials.sidebar')

        <!-- Main Wrapper -->
        <div class="flex flex-1 flex-col relative transition-all duration-300 min-w-0">
            <!-- Topbar -->
            @include('admin.partials.topbar')

            <!-- Main Content -->
            <main class="flex-1 bg-[#F8FAF7] p-4 lg:p-8">
                <div class="mx-auto max-w-7xl">
                    @yield('content')
                </div>
            </main>

            <!-- Footer -->
            @include('admin.partials.footer')
        </div>
    </div>

    <!-- SweetAlert Global Config -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            @if(session('success'))
                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                });
            @endif

            @if(session('error'))
                Toast.fire({
                    icon: 'error',
                    title: '{{ session('error') }}'
                });
            @endif

            @if($errors->any())
                Toast.fire({
                    icon: 'error',
                    title: 'Terdapat kesalahan pada input form Anda.'
                });
            @endif
        });

        function confirmDelete(formId, itemName = 'Data ini') {
            Swal.fire({
                title: 'Hapus Data?',
                text: `${itemName} yang dihapus tidak dapat dikembalikan.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
