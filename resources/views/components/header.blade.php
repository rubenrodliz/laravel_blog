<header class="flex h-14 items-center justify-between px-4 md:px-6">
    <a class="flex items-center gap-2" href="/">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="h-6 w-6" data-id="4">
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
