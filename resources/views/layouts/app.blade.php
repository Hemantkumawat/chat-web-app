<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900">
<div id="app">
    <nav class="bg-white dark:bg-gray-800 shadow-md py-3">
        <div class="container mx-auto px-4 flex items-center justify-between">
            <a class="text-lg font-semibold text-gray-900 dark:text-gray-100" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <div class="flex items-center justify-between">
                <!-- Right Side Of Navbar -->
                <div class="flex gap-3 flex-row space-x-4">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <div>
                                <a class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100"
                                   href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                        @endif

                        @if (Route::has('register'))
                            <div>
                                <a class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100"
                                   href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                        @endif
                    @else
                        <div>
                            <a class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100">
                                {{ Auth::user()->name }}
                            </a>
                        </div>
                        <div>
                            <a class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-gray-100"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>
</div>
</body>
</html>
