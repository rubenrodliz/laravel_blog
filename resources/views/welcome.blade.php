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
    <x-header />

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
