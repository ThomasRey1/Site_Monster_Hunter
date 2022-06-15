<x-guest-layout>
    <x-auth-card>
        <p class="text-center text-6xl mb-[100px] text-black dark:text-[#FFF6E5]">Connexion</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :placeholder="__('Email')" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full" :placeholder="__('Mot de passe')" type="password" name="password" required autocomplete="current-password" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <!-- Remember Me -->
                <label for="remember_me" class="w-[50%] inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#3F5A99] shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-black dark:text-[#FFF6E5]">{{ __('Se souvenir de moi') }}</span>
                </label>

                <x-button class="w-[50%] ml-3">
                    {{ __('Se connecter') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>