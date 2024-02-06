<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <div class="flex flex-col min-h-screen bg-white">
        <x-header />

        <main class="flex-1 flex flex-col justify-center min-h-full">
            <section class="w-full py-12 md:py-24 lg:py-32">
                <div class="px-4 md:px-6">
                    <div class="flex flex-col items-center justify-center space-y-4 text-center">
                        <div class="space-y-2">
                            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                                {{ __('Forgot your password?') }}
                            </h1>
                            <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </p>
                        </div>
                        <div class="w-full max-w-md">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="mt-4 flex flex-col items-start space-y-2">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="flex flex-col items-center justify-center mt-4">
                                    <x-primary-button
                                        class="w-full inline-flex items-center justify-center bg-gray-900 hover:bg-gray-800 py-2 h-12 px-6"
                                        type="submit">
                                        {{ __('Email Password Reset Link') }}
                                    </x-primary-button>

                                    <a href="{{ route('register') }}" class="text-sm self-end mt-4 hover:underline">
                                        <span>
                                            {{ __("Don't have an account?") }}
                                        </span>
                                        {{ __('Sign up') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-guest-layout>

