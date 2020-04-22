<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="font-baloo bg-gray-100 flex flex-col min-h-screen">
        <header class="shadow">
            <div class="flex flex-row justify-between items-center w-1/2 mx-auto">
                <div class="font-bold text-2xl p-4">
                    <a href="{{ url('/') }}" class="inline-block">Oung</a>
                </div>
                <div class="flex flex-row">
                    @auth
                        <a href="{{ route('oung.profile.index') }}" class="p-4">{{ auth()->user()->name }}</a>

                        {{-- <div class="relative">
                            <button class="p-4 block">                        
                                {{ auth()->user()->name }}
                            </button>
                            <div class="flex flex-col bg-white shadow py-2 absolute right-0 mr-4 w-32">
                                <a href="#" class="px-4 py-2 block">Profile</a>
                                <a href="#" class="px-4 py-2 block">Settings</a>
                                <a href="#" class="px-4 py-2 block">Logout</a>
                            </div>
                        </div> --}}
            
                    @else
                        <a href="{{ route('login') }}" class="p-4 inline-block">Login</a>
                        <a href="{{ route('register') }}" class="p-4 inline-block">Register</a>
                    @endauth

                </div>
            </div>
        </header>

        <main class="px-4 w-1/2 mx-auto flex-grow">
            @yield('content')
        </main>
        
        <footer class="p-4 w-1/2 mx-auto">
            {{-- <div class="shadow bg-gray-100 p-4"> --}}
            &copy; 2020 Oung. All rights reserved.
            <div class="flex flex-row">
                <a href="#" class="mr-4">About</a>
                <a href="#" class="mr-4">Blog</a>
                <a href="#" class="mr-4">Hire</a>
                <a href="#" class="mr-4">Privacy</a>
                <a href="#" class="">Terms</a>
            </div>
            {{-- </div> --}}
        </footer>
    </div>
</body>
</html>
