@extends('layouts.app2')
@section('content')

    <body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
        <!-- App preloader-->

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
                        Questions
                    </h2>
                </div>

                <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

                    {{-- Sidebar --}}
                    @include('components.mini-sidebar-menu')

                    {{-- Main Content: Dashbpard --}}
                    <div class="flex items-center col-span-12 lg:col-span-8 xl:col-span-9">

                        <a href="{{ route('questions.create') }}">Ask a Question</a>

                        @foreach ($questions as $question)
                            <div>
                                <h2>{{ $question->question_text }}</h2>
                                <a href="{{ route('questions.show', $question->id) }}">View Details</a>
                                <a href="{{ route('answers.create', ['question_id' => $question->id]) }}">Answer</a>
                                <!-- Link to answer the question -->
                                <a href="{{ route('questions.edit', $question->id) }}">Edit</a>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        @endforeach

                    </div>
                </div>
            </main>
        </div>


    </body>
@endsection
