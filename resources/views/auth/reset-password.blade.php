<x-guest-layout>
    <div class="flex flex-col min-h-screen bg-white">
        <x-header />

        <main class="flex-1 flex flex-col justify-center min-h-full">
            <section class="w-full py-12 md:py-24 lg:py-32">
                <div class="px-4 md:px-6">
                    <div class="flex flex-col items-center justify-center space-y-4 text-center">
                        <div class="space-y-2">
                            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                                {{ __('Reset Password') }}
                            </h1>
                            <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                                {{ __('Ensure your account is using a long, random password to stay secure.') }}
                            </p>
                        </div>
                        <div class="w-full max-w-md">
                            <form method="POST" action="{{ route('password.store')  }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Address -->
                                <div class="mt-4 flex flex-col items-start space-y-2">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4 flex flex-col items-start space-y-2">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <div class="flex items-center relative w-full">
                                        <x-text-input id="password" class="block mt-1 w-full pr-10"
                                                      type="password"
                                                      name="password"
                                                      required autocomplete="new-password"
                                        />

                                        <button type="button" onclick="togglePasswordVisibility('password')"
                                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5"
                                        >
                                            Mostrar contraseña
                                        </button>
                                    </div>

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4 flex flex-col items-start space-y-2">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <div class="flex items-center relative w-full">
                                        <x-text-input id="password_confirmation" class="block mt-1 w-full pr-10"
                                                      type="password"
                                                      name="password_confirmation"
                                                      required autocomplete="new-password"
                                        />

                                        <button type="button" onclick="togglePasswordVisibility('password_confirmation')"
                                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5"
                                        >
                                            Mostrar contraseña
                                        </button>
                                    </div>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <x-primary-button
                                        class="w-full inline-flex items-center justify-center bg-gray-900 hover:bg-gray-800 py-2 h-12 px-6"
                                        type="submit">
                                        {{ __('Reset Password') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        function togglePasswordVisibility(passwordFieldId) {
            let passwordInput = document.getElementById(passwordFieldId);
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</x-guest-layout>
