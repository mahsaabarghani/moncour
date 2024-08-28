<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your userName address and we will userName you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.userName') }}">
        @csrf

        <!-- userName Address -->
        <div>
            <x-input-label for="userName" :value="__('userName')" />
            <x-text-input id="userName" class="block mt-1 w-full" type="userName" name="userName" :value="old('userName')" required autofocus />
            <x-input-error :messages="$errors->get('userName')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('userName Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
