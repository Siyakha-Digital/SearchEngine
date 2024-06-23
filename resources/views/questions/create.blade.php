<!-- resources/views/questions/create.blade.php -->

@extends('layouts.app2')
@section('content')

<body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">

        @include('components.top-navigation-bar')

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Ask a Question
                </h2>
            </div>

            <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <!-- Main Content: Dashboard -->
                <div class="col-span-12 lg:col-span-8 xl:col-span-9">
                    <form action="{{ route('questions.store') }}" method="POST" class="space-y-6 bg-white dark:bg-navy-800 p-6 rounded-lg shadow-lg">
                        @csrf
                        <div class="space-y-2">
                            <label for="question_text" class="block text-sm font-medium text-slate-700 dark:text-navy-200">Question:</label>
                            <textarea id="question_text" name="question_text" required class="block w-full px-4 py-2 text-slate-700 bg-white border border-slate-300 rounded-md shadow-sm focus:border-black focus:ring focus:ring-black focus:ring-opacity-50 dark:bg-navy-700 dark:border-navy-600 dark:text-navy-200 dark:focus:ring-navy-200"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-slate-700 text-slate-700 dark:text-navy-200 border border-slate-300 rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none active:bg-slate-700 transition ease-in-out duration-150">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

                    {{-- Main Content: Ask a question --}}
                    <div class="flex items-center col-span-12 lg:col-span-8 xl:col-span-9">
   
                        <form action="{{ route('questions.store') }}" method="POST" class="w-full space-y-5"
                            >
                            @csrf

                         {{-- Form Container --}}
                         <div class="mt-4 space-y-5">

                            {{-- Error Message --}}
                            @if ($errors->any())
                                <div class="text-sm text-error">
                                    <strong>Oops! There were some problems with your submission. Please check the form
                                        below for errors.</strong>
                                </div>
                            @endif

                            {{-- Success Message --}}
                            @if (session('success'))
                                <div class="text-sm text-success">
                                    <strong>{{ session('success') }}</strong>
                                </div>
                            @endif

                            {{-- Question --}}
                            <label class="block">
                                <span>Question</span><br>
                                <textarea
                                    class="form-textarea mt-1.5 w-full rounded-2xl border border-slate-300 p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    id="question_text" name="question_text" rows="10" maxlength="65535"
                                    placeholder="Enter your question here. Be as detailed as possible.">{{ old('question') }}</textarea><br>
                                @error('question_text')
                                    <span class="text-sm text-error">{{ $message }}</span>
                                @enderror
                            </label>

                            {{-- Ask Question Button --}}
                            <div class="flex justify-start">
                                <button
                                    class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                    type="submit">
                                    Ask Question
                                </button>
                            </div>

                        </div>
                     
                    </div>
                </div>
            </main>
        </div>


    </body>
@endsection
