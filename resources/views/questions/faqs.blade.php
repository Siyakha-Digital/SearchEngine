@extends('layouts.app2')
@section('content')
    <?php
    
    // Example Frequently Asked Questions
    $frequentlyAskedQuestionsAndAnswers = [
    ['question' => 'What is classified as an SMME?', 'answer' => 'In South Africa, an SMME is classified based on the number of employees, annual turnover, and the sector in which the business operates. The classification ranges from micro-enterprises to small and medium enterprises.'],
    ['question' => 'What is the role of SMMEs in the South African economy?', 'answer' => 'SMMEs play a vital role in the South African economy by creating jobs, fostering innovation, and contributing significantly to GDP. They help reduce poverty and inequality by providing employment opportunities and driving economic growth.'],
    ['question' => 'How many SMMEs are in South Africa?', 'answer' => 'As of the latest statistics, there are approximately 2.5 million SMMEs in South Africa, contributing significantly to employment and the economy.'],
    ['question' => 'How do I apply for SMME?', 'answer' => 'To apply for SMME status in South Africa, you need to register your business with the Companies and Intellectual Property Commission (CIPC), obtain the necessary licenses and permits, and ensure you meet the criteria set for SMMEs in terms of size and turnover.'],
    ['question' => 'What does SMME mean?', 'answer' => 'SMME stands for Small, Medium, and Micro Enterprises. These are businesses that vary in size and capacity but share common characteristics of being independently owned and operated, and meeting specific thresholds for employees and turnover.'],
    ['question' => 'Who qualifies for SME?', 'answer' => 'In South Africa, a business qualifies as an SME if it meets the criteria set by the National Small Business Act, which includes the number of employees, annual turnover, and the nature of the business. SMEs typically include micro, small, and medium-sized enterprises.'],
    // Add more questions and answers as needed
];

    
    // Example Popular Searched Questions : Limit to only 4 questions
    // $popularQuestions = [
    //     'How to apply for SMME funding?',
    //     'What are the tax benefits for SMMEs?',
    //     'How to market my SMME effectively?',
    //     'What are the latest trends in SMME development?',
    //     // Add more popular questions as needed
    // ];
    
    ?>

    <body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
        <!-- App preloader-->

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
                        Frequently Asked Questions
                    </h2>
                </div>

                {{-- Question's Search Block --}}
                <div class="relative flex flex-col items-center justify-center">
                    {{-- <div class="absolute right-0 top-0 -mt-8 hidden max-w-xs p-4 lg:block">
          <img src="backend/images/illustrations/help.svg" alt="image">
        </div> --}}
       
        <p class="pt-3">
          Have you searched for your question on the search, and checked on the FAQ section
          but still can't find an answer?
          Feel free to ask your question
          <a href="{{ route('questions.create') }}" class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
            here
          </a>
          .
        </p>

                    {{-- Question Ask/Search Bar --}}
                    {{-- <div class="relative mt-6 w-full max-w-md">
                      <input
                          class="form-input peer h-12 w-full rounded-l-full border border-slate-300 bg-slate-50 px-4 py-2 pl-9 text-base placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-900 dark:hover:border-navy-400 dark:focus:border-accent"
                          placeholder="Search your question" type="text">
                      <button
                          class="absolute right-0 top-0 h-12 px-4 rounded-r-full bg-primary text-white hover:bg-primary-dark focus:outline-none dark:bg-accent dark:hover:bg-accent-dark">
                          Ask
                      </button>
                      <div
                          class="absolute left-0 top-0 flex h-12 w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                          <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                          </svg>
                      </div>
                  </div> --}}
                    {{-- Popular Searched --}}
                    {{-- <div class="inline-space mt-3 flex flex-wrap items-center justify-center">
                        <span>Popular Asked:</span>
                        <div>
                            @foreach ($popularQuestions as $question)
                                <a href="#"
                                    class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                    {{ $question }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div> --}}


                <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

                    @include('components.mini-sidebar-menu')

                    {{-- Main Content: Frequently Asked Questions --}}
                    <div class="col-span-12 lg:col-span-8 xl:col-span-9">

                        {{-- Main Section Header --}}
                        <div class="flex items-center space-x-2 pb-4">

                            {{-- Icon --}}
                            <div
                                class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            </div>

                            {{-- Title --}}
                            <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                Frequently Asked Questions
                            </h4>

                        </div>

                        {{-- Content --}}
                        <div x-data="{ expandedItem: null }" class="space-y-4 sm:space-y-5 w-full">
                            @foreach ($frequentlyAskedQuestionsAndAnswers as $index => $item)
                                <div class="card" x-data="{ expanded: false }">
                                    <div class="flex cursor-pointer items-center justify-between p-4"
                                        @click="expanded = !expanded">
                                        <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                                            {{ $item['question'] }}
                                        </h3>
                                        <div :class="{ '-rotate-180': expanded }"
                                            class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
                                            <i class="fas fa-chevron-down"></i>
                                        </div>
                                    </div>
                                    <div x-show="expanded" style="display: none;" x-collapse>
                                        <div class="px-4 pb-4">
                                            <p>
                                                {{ $item['answer'] }}
                                            </p>
                                            <!-- Add any tags or additional information related to the question here -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!--
          This is a place for Alpine.js Teleport feature
          @see https://alpinejs.dev/directives/teleport
        -->
        <div id="x-teleport-target"></div>
        <script>
            window.addEventListener("DOMContentLoaded", () => Alpine.start());
        </script>


        <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
            style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
            <defs id="SvgjsDefs1002"></defs>
            <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
            <path id="SvgjsPath1004" d="M0 0 "></path>
        </svg>

    </body>
@endsection
