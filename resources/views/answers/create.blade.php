@extends('layouts.app2')

@section('content')
<body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">

        @include('components.top-navigation-bar')

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <div class="max-w-2xl mx-auto px-4 py-8">

                <div class="text-xl lg:text-2xl font-semibold text-slate-800 dark:text-navy-50 mb-4">{{ $question->question_text }}</div>

                <form action="{{ route('answers.store') }}" method="POST" class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                    <div class="mb-4">
                        <label for="answer_text" class="block text-sm font-medium text-slate-700 dark:text-navy-200">Your Answer:</label>
                        <textarea id="answer_text" name="answer_text" required rows="6" class="w-full px-3 py-2 text-slate-700 dark:text-navy-200 border rounded-md focus:outline-none focus:border-primary-500 dark:bg-navy-700 dark:border-navy-600 dark:focus:border-primary-600 dark:focus:ring dark:focus:ring-primary-200 dark:focus:ring-opacity-50"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="inline-block px-4 py-2 bg-primary-600 text-white rounded-md font-semibold text-sm uppercase tracking-wider focus:outline-none hover:bg-primary-500 focus:bg-primary-700">Submit Answer</button>
                    </div>
                </form>

                <a href="{{ route('questions.show', $question->id) }}" class="block mt-4 text-sm text-slate-700 dark:text-navy-200 hover:text-primary-600 dark:hover:text-primary-400">&larr; Back to Question</a>
            </div>
        </main>
    </div>
</body>
@endsection
