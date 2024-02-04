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
    <header class="flex h-14 items-center justify-end px-4 md:px-6">
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
    <footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6">
        <p class="text-xs text-gray-500 dark:text-gray-400">
            {{ __('home_footer_copyright') }}
        </p>
        <nav class="sm:ml-auto flex gap-4 sm:gap-6">
            <a class="text-xs hover:underline underline-offset-4"
               href="https://github.com/rubenrodliz"
               rel="author"
               target="_blank"
            >
                <svg width="24" height="24" viewBox="0 0 97.707 97.707" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="#24292f"/>
                </svg>
            </a>
        </nav>
    </footer>
</div>
</body>
</html>
