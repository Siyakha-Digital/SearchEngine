@extends('layouts.app2')
@section('content')

<body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">

        @include('components.top-navigation-bar')

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    {{ $question->question_text }}
                </h2>
            </div>

            <div class="flex items-center space-x-4 py-5 lg:py-6">
                <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <h3 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                    Answers:
                </h3>
            </div>

            <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <!-- Main Content: Dashboard -->
                <div class="col-span-12 lg:col-span-8 xl:col-span-9">
                    <ul class="space-y-4">
                        @foreach ($question->answers as $answer)
                        <li class="bg-white dark:bg-navy-800 p-4 rounded-lg shadow-lg">
                            <p class="text-base text-slate-700 dark:text-navy-200">{{ $answer->answer_text }}</p>
                        </li>
                        @endforeach
                    </ul>

                    <form action="{{ route('answers.store') }}" method="POST" class="mt-8 space-y-6 bg-white dark:bg-navy-800 p-6 rounded-lg shadow-lg">
                        @csrf
                        <input type="hidden" name="question_id" value="{{ $question->id }}">
                        <div class="space-y-2">
                            <label for="answer_text" class="block text-sm font-medium text-slate-700 dark:text-navy-200">Your Answer:</label>
                            <textarea id="answer_text" name="answer_text" required class="block w-full px-4 py-2 text-slate-700 bg-white border border-slate-300 rounded-md shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 focus:ring-opacity-50 dark:bg-navy-700 dark:border-navy-600 dark:text-navy-200 dark:focus:ring-navy-200"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-transparent border border-black rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-black hover:text-white focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-200 active:bg-black active:text-white disabled:opacity-25 transition ease-in-out duration-150">
                                Submit Answer
                            </button>
                        </div>
                    </form>

                    <a href="{{ route('questions.index') }}" class="block mt-8 text-sm text-slate-700 dark:text-navy-200 hover:text-primary-600 dark:hover:text-primary-400">Back to Questions</a>
                </div>
            </div>
        </main>
    </div>
</body>
@endsection
