

@extends('layouts.app2')
@section('content')
<main class="grid w-full grow grid-cols-1 place-items-center">
  <div class="w-full max-w-[26rem] p-4 sm:px-5">
    <div class="text-center">
      {{--App Logo--}}
      {{-- <img class="mx-auto" src="https://yowza.co.za/images/Logo/April-2024/yowza-main-logo.png" alt="logo" /> --}}
      <div class="mt-4">
        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
          Welcome to YowzaSearch
        </h2>
        <p class="text-slate-400 dark:text-navy-300">
          Please register an account up to continue
        </p>
      </div>
    </div>
    <div class="card mt-5 rounded-lg p-5 lg:p-7">
     {{--Email Field--}}
      <label class="relative flex">
        <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Email" type="text">
        <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </span>
      </label>

      {{--Password Field--}}
      <label class="relative mt-4 flex">
        <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Password" type="password">
        <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
        </span>
      </label>
      
      {{--Confirm Password Field--}}
      <label class="relative mt-4 flex">
        <input class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Repeat Password" type="password">
        <span class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
          </svg>
        </span>
      </label>

      {{--Privact policy button--}}
      <div class="mt-4 flex items-center space-x-2">
        <input class="form-checkbox is-basic size-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent" type="checkbox">
        <p class="line-clamp-1">
          I agree with
          <a href="#" class="text-slate-400 hover:underline dark:text-navy-300">
            privacy policy
          </a>
        </p>
      </div>
      
      {{--Signup Button--}}
      <button class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
        Register
      </button>
      

      {{--Already Have an account button--}}
      <div class="mt-4 text-center text-xs+">
        <p class="line-clamp-1">
          <span>Already have an account? </span>
          <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent" href="{{ route('login2')}}">Log In</a>
        </p>
      </div>
      <div class="my-7 flex items-center space-x-3">
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
        <p class="text-tiny+ uppercase">or register with</p>
        <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
      </div>

      {{--Other signup options--}}
      <div class="flex space-x-4">

        {{--Google--}}
        <button class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
          <img class="size-5.5" src="images/logos/google.svg" alt="logo">
          <span>Google</span>
        </button>

        {{--Github--}}
        {{-- <button class="btn w-full space-x-3 border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
          <img class="size-5.5" src="images/logos/github.svg" alt="logo">
          <span>Github</span>
        </button> --}}
      </div>
    </div>
  </div>
</main>
@endsection