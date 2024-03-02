<x-guest-layout>
    <div class="flex flex-col min-h-screen bg-white">
        <x-header />

        <main class="flex-1 flex flex-col justify-center min-h-full">
            <section class="w-full">
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
                                    <x-forms.input-label for="name" :value="__('Name')"/>
                                    <x-forms.text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                                  :value="old('name')" required
                                                  autofocus autocomplete="name"/>
                                    <x-forms.input-error :messages="$errors->get('name')" class="mt-2"/>
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4 flex flex-col items-start">
                                    <x-forms.input-label for="email" :value="__('Email')"/>
                                    <x-forms.text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                  :value="old('email')" required
                                                  autocomplete="username"/>
                                    <x-forms.input-error :messages="$errors->get('email')" class="mt-2"/>
                                </div>

                                <!-- Password -->
                                <div class="mt-4 flex flex-col items-start relative">
                                    <x-forms.input-label for="password" :value="__('Password')"/>

                                    <div class="flex items-center relative w-full">
                                        <x-forms.text-input id="password" class="block mt-1 w-full pr-10"
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

                                    <x-forms.input-error :messages="$errors->get('password')" class="mt-2"/>
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4 flex flex-col items-start">
                                    <x-forms.input-label for="password_confirmation" :value="__('Confirm Password')"/>

                                    <div class="flex items-center relative w-full">
                                        <x-forms.text-input id="password_confirmation" class="block mt-1 w-full pr-10"
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

                                    <x-forms.input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
                                </div>

                                <div class="flex flex-col items-center justify-center mt-4">
                                    <x-primary-button
                                        class="w-full inline-flex items-center justify-center bg-gray-900 hover:bg-gray-800 py-2 h-12 px-6"
                                        type="submit">
                                        {{ __('Register') }}
                                    </x-primary-button>

                                    <a href="{{ route('login') }}" class="text-sm self-end mt-4 hover:underline">
                                        <span>
                                            {{ __("Already have an account?") }}
                                        </span>
                                        {{ __('Login') }}
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <x-footer/>
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
