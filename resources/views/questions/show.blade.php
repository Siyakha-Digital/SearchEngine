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

                        <form action="{{ route('answers.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="question_id" value="{{ $question->id }}">
                            <div>
                                <label for="answer_text">Your Answer:</label>
                                <textarea id="answer_text" name="answer_text" required></textarea>
                            </div>
                             {{-- Submit Answer Button --}}
                             <div class="flex justify-start">
                                <button
                                    class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                    type="submit">
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
