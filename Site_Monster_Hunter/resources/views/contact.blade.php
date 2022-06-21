<x-app-layout>
    <x-auth-card>
        <p class="text-center text-6xl mb-[100px] text-black dark:text-[#FFF6E5]">Contacte</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('contacte.show') }}">
            @csrf
            <!-- Name -->
            <div class="flex">
                <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :placeholder="__('Nom')" :value="old('lastName')" required autofocus />
                <x-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :placeholder="__('Prénom')" :value="old('firstName')" required autofocus />
            </div>
            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :placeholder="__('Email')" :value="old('email')" required autofocus />
            </div>

            <!-- Subject -->
            <div class="mt-4">
                <x-input id="subject" class="block mt-1 w-full" :placeholder="__('Sujet')" type="text" name="subject" required autocomplete="current-password" />
            </div>



            <div class="flex items-center justify-end mt-4">
                <x-button class="w-[100%] ml-3">
                    {{ __('Envoyer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>