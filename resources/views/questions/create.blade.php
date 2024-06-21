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
            </div>
        </main>
    </div>
</body>
@endsection
