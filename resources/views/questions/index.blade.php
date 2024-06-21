<!-- resources/views/questions/index.blade.php -->

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
                    Questions
                </h2>
            </div>

            <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <!-- Main Content: Dashboard -->
                <div class="col-span-12 lg:col-span-8 xl:col-span-9">

                    <a href="{{ route('questions.create') }}" class="inline-block px-4 py-2 mb-4 bg-slate-700 text-black rounded-md hover:bg-slate-800 dark:bg-navy-700 dark:hover:bg-navy-600">
                        Ask a Question
                    </a>

                    @foreach ($questions as $question)
                        <div class="mb-6 p-4 bg-white dark:bg-navy-800 rounded-lg shadow-lg">
                            <h2 class="text-lg font-semibold text-slate-800 dark:text-navy-200">{{ $question->question_text }}</h2>
                            <div class="mt-2 space-x-2">
                                <a href="{{ route('questions.show', $question->id) }}" class="text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300">View Details</a>
                                <a href="{{ route('answers.create', ['question_id' => $question->id]) }}" class="text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300">Answer</a>
                                <a href="{{ route('questions.edit', $question->id) }}" class="text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300">Edit</a>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </main>
    </div>
</body>
@endsection
