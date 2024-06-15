<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        
    </form>
    
    <div class="my-7 flex items-center space-x-3">
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
        <p class="text-tiny+">or register with</p>
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
      </div>

      {{--Other signup options--}}
      <div class="flex space-x-4">

        {{--Google--}}
        <button style="display: inline-flex; align-items: center; justify-content: center; width: 100%; padding: 0.5rem 1rem; border: 1px solid  #1f2937; background-color: #1f2937; color: white; font-size: 1rem; font-weight: medium; text-align: center; cursor: pointer; gap: 12px; border-radius: 0.375rem;" onmouseover="this.style.backgroundColor='#333333'" onfocus="this.style.backgroundColor='#333333'" onactive="this.style.backgroundColor='#1a1a1a'">
            <img style="height: 24px;" src="backend/images/logos/google.svg" alt="logo">
            <span>Register with Google</span>
          </button>

      </div>
</x-guest-layout>
