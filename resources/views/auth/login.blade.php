<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div class="flex flex-col min-h-screen bg-white">
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
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="mt-4 flex flex-col items-start space-y-2">
                                    <x-input-label :value="__('Email')" class="text-lg font-medium"/>
                                    <x-text-input id="email" name="email" type="email" class="w-full" required autofocus
                                                  autocomplete="username"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                </div>

                                <!-- Password -->
                                <div class="mt-4 flex flex-col items-start space-y-2">
                                    <div class=" w-full inline-flex justify-between">
                                        <x-input-label for="password" :value="__('Password')"/>
                                        <a href="{{ route('password.request') }}" class="text-sm hover:underline">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    </div>
                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                  name="password" required autocomplete="current-password"/>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <x-primary-button
                                        class="w-full inline-flex items-center justify-center bg-gray-900 hover:bg-gray-800 py-2 h-12 px-6"
                                        type="submit">
                                        {{ __('login_input_submit') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <x-footer/>
    </div>
</x-guest-layout>
