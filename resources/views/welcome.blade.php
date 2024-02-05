<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div class="flex flex-col min-h-screen">
    <header class="flex h-14 items-center justify-between px-4 md:px-6">
        <a class="flex items-center gap-2" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6" data-id="4">
                <polyline points="16 18 22 12 16 6"></polyline>
                <polyline points="8 6 2 12 8 18"></polyline>
            </svg>
            <span class="sr-only">
                    Rubén DAW
                </span>
        </a>
        @if (Route::has('login'))
            <nav class="flex gap-4 sm:gap-6">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="text-sm font-medium hover:underline underline-offset-4">
                        {{ __('Dashboard') }}
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="text-sm font-medium hover:underline underline-offset-4">
                        {{ __('Login') }}
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="text-sm font-medium hover:underline underline-offset-4">
                            {{ __('Register') }}
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <main class="flex-1 flex flex-col justify-center min-h-full">
        <section class="w-full py-12 md:py-24 lg:py-32">
            <div class="px-4 md:px-6">
                <div class="flex flex-col items-center justify-center space-y-4 text-center">
                    <div class="space-y-2">
                        <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                            {{ __('home_title') }}
                        </h1>
                        <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                            {{ __('home_subtitle') }}
                        </p>
                    </div>
                    <div class="sm:space-x-4">
                        <a class="inline-flex h-9 items-center justify-center rounded-md bg-gray-900 px-4 py-2 text-sm font-medium text-gray-50 shadow transition-colors hover:bg-gray-900/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50"
                           href="{{ route('login') }}"
                           rel="next"
                        >
                            {{ __('home_button_1') }}
                        </a>
                        <a class="inline-flex h-9 items-center justify-center rounded-md bg-white px-4 py-2 text-sm font-medium text-black shadow transition-colors hover:bg-gray-100/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50"
                           href="https://agitated-villani.5-250-190-133.plesk.page/"
                           rel="external"
                           target="_blank"
                        >
                            {{ __('home_button_2') }}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-footer />
</div>
</body>
</html>
