<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">

        </x-slot>

        <div class="m-10">

            <h1 class="text-center m-5 display-1">Registration and Login System</h1>
            <h2 class="text-center m-5 display-2">Create Account</h2>

        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Name -->
            <div>
                <x-label for="last_name" :value="__('Last name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">

                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required />
                    
            </div>

            <div class="flex items-center justify-center mt-4">

                <x-button class="ml-4 w-25 p-3">
                    {{ __('Register') }}
                </x-button>

            </div>

            <div class="border-top-2 border-secondary m-5">

                <a class="grid text-center" href="/login">Have an account ? Go to login !</a>
                <a class="grid text-center" href="/">Back to Home</a>

            </div>

        </form>

    </x-auth-card>

</x-guest-layout>
