<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

         <!-- Don't have an account -->
         <div class="flex items-center mt-4 justify-end">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                <span>Don't have an account yet?</span>
            </a>
        </div>

        
    </form>
    
    <div class="my-7 flex items-center space-x-3">
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
        <p class="text-tiny+">or login with</p>
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
      </div>

      {{--Other signup options--}}
      <div class="flex space-x-4">

        {{--Google--}}
        <button style="display: inline-flex; align-items: center; justify-content: center; width: 100%; padding: 0.5rem 1rem; border: 1px solid  #1f2937; background-color: #1f2937; color: white; font-size: 1rem; font-weight: medium; text-align: center; cursor: pointer; gap: 12px; border-radius: 0.375rem;" onmouseover="this.style.backgroundColor='#333333'" onfocus="this.style.backgroundColor='#333333'" onactive="this.style.backgroundColor='#1a1a1a'">
            <img style="height: 24px;" src="backend/images/logos/google.svg" alt="logo">
            <span>Login with Google</span>
          </button>

      </div>
</x-guest-layout>
