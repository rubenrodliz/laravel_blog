<x-guest-layout>
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
                            {{ __('Log in') }}
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
                                {{ __('Register') }}
                            </h1>
                            <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                                {{ __('register_description') }}
                            </p>
                        </div>
                        <div class="w-full max-w-md">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="mt-4 flex flex-col items-start">
                                    <x-input-label for="name" :value="__('Name')"/>
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                                  :value="old('name')" required
                                                  autofocus autocomplete="name"/>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4 flex flex-col items-start">
                                    <x-input-label for="email" :value="__('Email')"/>
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                  :value="old('email')" required
                                                  autocomplete="username"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                </div>

                                <!-- Password -->
                                <div class="mt-4 flex flex-col items-start">
                                    <x-input-label for="password" :value="__('Password')"/>

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="new-password"/>

                                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4 flex flex-col items-start">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                  type="password"
                                                  name="password_confirmation" required autocomplete="new-password"/>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                                </div>

                                <div class="flex items-center justify-center mt-4">
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                       href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    <x-primary-button class="ms-4">
                                        {{ __('Register') }}
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
