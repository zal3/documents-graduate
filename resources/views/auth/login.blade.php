<x-guest-layout class="bg-white">
    <x-jet-authentication-card class="bg-white">
        <x-slot name="logo"  class="bg-white">
            <div class="text-3xl font-bold text-center flex flex-col justify-centet items-center ">
            <img src="{{ asset('img/it.png') }}" alt="logo" class="opacity-70" width="150" height="150">

            {{ __('اهلا بك في وحدة الوثائق') }}

            </div>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}"  dir="rtl">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('البريد الالكتروني') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('كلمة المرور') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('تذكرني') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('نسيت كلمة السر ؟') }}
                    </a>
                @endif
                <a class="text-md text-gray-600 underline hover:text-gray-900" href="{{ route('register') }}">
                    انشاء حساب جديد
                </a>

                <x-jet-button class="ml-4">
                    {{ __('تسجيل دخول') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
