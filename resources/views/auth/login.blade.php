<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col min-h-screen bg-white">
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
                                {{ __('login_title') }}
                            </h1>
                            <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                                {{ __('login_description') }}
                            </p>
                        </div>
                        <div class="w-full max-w-md">
                            <input class="flex border-input bg-background py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full mb-4 h-12 px-3 text-base placeholder-gray-500 border rounded-lg focus:shadow-outline"
                                   placeholder="{{ __('login_input_1') }}" type="email">
                            <input class="flex border-input bg-background py-2 ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full mb-4 h-12 px-3 text-base placeholder-gray-500 border rounded-lg focus:shadow-outline"
                                   placeholder="{{ __('login_input_2') }}" type="password">
                            <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 py-2 w-full h-12 px-6 text-indigo-100 transition-colors duration-150 bg-gray-900 rounded-lg focus:shadow-outline hover:bg-gray-800" type="submit">
                                {{ __('login_input_submit') }}
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <x-footer />
    </div>
</x-guest-layout>
