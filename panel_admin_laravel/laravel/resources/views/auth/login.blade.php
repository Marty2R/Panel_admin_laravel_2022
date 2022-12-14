<x-guest-layout>
    <x-auth-card class="bg-primary">
        <x-slot name="logo">
            
        </x-slot>
        <div class="bg-primary">
            <div class="m-10">

                <h1 class="text-center m-5 display-1">Registration and Login System</h1>
                <h2 class="text-center m-5 display-2">User Login</h2>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="mt-5">

                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>

                    <button class="btn btn-outline-primary">
                        {{ __('Log in') }}
                    </button>

                </div>

                <div class="border-top-2 border-secondary m-5">

                    <a class="grid text-center" href="/register">Need an account ? Sing up !</a>
                    <a class="grid text-center" href="/">Back to Home</a>

                </div>

            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
