

@extends('layouts.app2')
@section('content')

<?php

// Example Frequently Asked Questions
$faqItems = [
  ['question' => 'What is an SMME?', 'answer' => 'SMME stands for Small, Medium, and Micro Enterprises. These are businesses that fall under certain thresholds of employees, turnover, and financial strength, playing a crucial role in economic development and job creation.'],
  ['question' => 'How can I register my business as an SMME?', 'answer' => 'Registering a business as an SMME typically involves registering the business with the relevant national or local government authority, obtaining the necessary licenses, and meeting specific criteria set for SMMEs in your region.'],
  ['question' => 'What are the benefits of being classified as an SMME?', 'answer' => 'Benefits of being classified as an SMME can include access to special financing rates, tax incentives, business support services, and eligibility for certain government and private sector procurement programs designed to support smaller businesses.'],
  ['question' => 'How can SMMEs contribute to the economy?', 'answer' => 'SMMEs contribute to the economy by creating jobs, fostering innovation, driving competition, and contributing to GDP. They are often considered the backbone of many economies, especially in developing countries.'],
  ['question' => 'What challenges do SMMEs face?', 'answer' => 'Challenges faced by SMMEs include access to finance, navigating regulatory environments, competition with larger firms, access to markets, and capacity building for sustainable growth.'],
  // Add more questions and answers as needed
]; 

// Example Popular Searched Questions : Limit to only 4 questions
$popularQuestions = [
  'How to apply for SMME funding?',
  'What are the tax benefits for SMMEs?',
  'How to market my SMME effectively?',
  'What are the latest trends in SMME development?',
  // Add more popular questions as needed
];
?>

<body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
  <!-- App preloader-->
  
  <!-- Page Wrapper -->
  <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">

    <!-- App Header Wrapper-->
    <nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
      <!-- App Header  -->
      <div class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden">
        <!-- Header Items -->
        <div class="flex w-full items-center justify-center">

          <!-- Right: Header buttons -->
          <div class="-mr-1.5 flex items-center space-x-2">
            <!-- Main Search Toggle -->
            <button @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive" class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-slate-500 dark:text-navy-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </button>

            <!-- Main Searchbar -->
            <template x-if="$store.breakpoints.smAndUp">
              <div class="flex" x-data="usePopper({placement:'bottom-end',offset:12})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)">
                <div class="relative mr-4 flex h-8">
                  <input placeholder="Search here..." class="form-input peer h-full rounded-full bg-slate-150 px-4 pl-9 text-xs+ text-slate-800 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:text-navy-100 dark:placeholder-navy-300 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900" :class="isShowPopper ? 'w-80' : 'w-60'" @focus="isShowPopper= true" type="text" x-ref="popperRef">
                  <div class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"></path>
                    </svg>
                  </div>
                </div>
                <div :class="isShowPopper &amp;&amp; 'show'" class="popper-root" x-ref="popperRoot">
                  <div class="popper-box flex max-h-[calc(100vh-6rem)] w-80 flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark">
                    <div x-data="{activeTab:'tabAll'}" class="is-scrollbar-hidden flex shrink-0 overflow-x-auto rounded-t-lg bg-slate-100 px-2 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                      <button @click="activeTab = 'tabAll'" :class="activeTab === 'tabAll' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        All
                      </button>
                      <button @click="activeTab = 'tabFiles'" :class="activeTab === 'tabFiles' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        Files
                      </button>
                      <button @click="activeTab = 'tabChats'" :class="activeTab === 'tabChats' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        Chats
                      </button>
                      <button @click="activeTab = 'tabEmails'" :class="activeTab === 'tabEmails' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        Emails
                      </button>
                      <button @click="activeTab = 'tabProjects'" :class="activeTab === 'tabProjects' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        Projects
                      </button>
                      <button @click="activeTab = 'tabTasks'" :class="activeTab === 'tabTasks' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                        Tasks
                      </button>
                    </div>

                    <div class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2">
                      <div class="is-scrollbar-hidden mt-3 flex space-x-4 overflow-x-auto px-3">
                        <a href="apps-kanban.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-success text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Kanban
                          </p>
                        </a>
                        <a href="dashboards-crm-analytics.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-secondary text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Analytics
                          </p>
                        </a>
                        <a href="apps-chat.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-info text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Chat
                          </p>
                        </a>
                        <a href="apps-filemanager.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-error text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Files
                          </p>
                        </a>
                        <a href="dashboards-crypto-1.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-secondary text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Crypto
                          </p>
                        </a>
                        <a href="dashboards-banking-1.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-primary text-white dark:bg-accent">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Banking
                          </p>
                        </a>
                        <a href="apps-todo.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-info text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Todo
                          </p>
                        </a>
                        <a href="dashboards-crm-analytics.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-secondary text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Analytics
                          </p>
                        </a>
                        <a href="dashboards-orders.html" class="w-14 text-center">
                          <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-warning text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                              </svg>
                            </div>
                          </div>
                          <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Orders
                          </p>
                        </a>
                      </div>

                      <div class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3 dark:bg-navy-800">
                        <p class="text-xs uppercase">Recent</p>
                        <a href="#" class="text-tiny+ font-medium uppercase text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
                          View All
                        </a>
                      </div>

                      <div class="mt-1 font-inter font-medium">
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-chat.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                          </svg>
                          <span>Chat App</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-filemanager.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                          </svg>
                          <span>File Manager App</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-mail.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                          </svg>
                          <span>Email App</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-kanban.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                          </svg>
                          <span>Kanban Board</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-todo.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                          <span>Todo App</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-crypto-2.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>

                          <span>Crypto Dashboard</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-banking-2.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                          </svg>

                          <span>Banking Dashboard</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-crm-analytics.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                          </svg>

                          <span>Analytics Dashboard</span>
                        </a>
                        <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-influencer.html">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>

                          <span>Influencer Dashboard</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </template>

            <!-- Notification-->
            <div x-effect="if($store.global.isSearchbarActive) isShowPopper = false" x-data="usePopper({placement:'bottom-end',offset:12})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="flex">
              <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="btn relative size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-500 dark:text-navy-100" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.375 17.556h-6.75m6.75 0H21l-1.58-1.562a2.254 2.254 0 01-.67-1.596v-3.51a6.612 6.612 0 00-1.238-3.85 6.744 6.744 0 00-3.262-2.437v-.379c0-.59-.237-1.154-.659-1.571A2.265 2.265 0 0012 2c-.597 0-1.169.234-1.591.65a2.208 2.208 0 00-.659 1.572v.38c-2.621.915-4.5 3.385-4.5 6.287v3.51c0 .598-.24 1.172-.67 1.595L3 17.556h12.375zm0 0v1.11c0 .885-.356 1.733-.989 2.358A3.397 3.397 0 0112 22a3.397 3.397 0 01-2.386-.976 3.313 3.313 0 01-.989-2.357v-1.111h6.75z"></path>
                </svg>

                <span class="absolute -top-px -right-px flex size-3 items-center justify-center">
                  <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-80"></span>
                  <span class="inline-flex size-2 rounded-full bg-secondary"></span>
                </span>
              </button>
              <div :class="isShowPopper &amp;&amp; 'show'" class="popper-root" x-ref="popperRoot" style="position: fixed; inset: 0px 0px auto auto; margin: 0px; transform: translate(15px, 58px);" data-popper-placement="bottom-end">
                <div x-data="{activeTab:'tabAll'}" class="popper-box mx-4 mt-1 flex max-h-[calc(100vh-6rem)] w-[calc(100vw-2rem)] flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark sm:m-0 sm:w-80">
                  <div class="rounded-t-lg bg-slate-100 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                    <div class="flex items-center justify-between px-4 pt-2">
                      <div class="flex items-center space-x-2">
                        <h3 class="font-medium text-slate-700 dark:text-navy-100">
                          Notifications
                        </h3>
                        <div class="badge h-5 rounded-full bg-primary/10 px-1.5 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                          26
                        </div>
                      </div>

                      <button class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                      </button>
                    </div>

                    <div class="is-scrollbar-hidden flex shrink-0 overflow-x-auto px-3">
                      <button @click="activeTab = 'tabAll'" :class="activeTab === 'tabAll' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-primary dark:border-accent text-primary dark:text-accent-light">
                        <span>All</span>
                      </button>
                      <button @click="activeTab = 'tabAlerts'" :class="activeTab === 'tabAlerts' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
                        <span>Alerts</span>
                      </button>
                      <button @click="activeTab = 'tabEvents'" :class="activeTab === 'tabEvents' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
                        <span>Events</span>
                      </button>
                      <button @click="activeTab = 'tabLogs'" :class="activeTab === 'tabLogs' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
                        <span>Logs</span>
                      </button>
                    </div>
                  </div>

                  <div class="tab-content flex flex-col overflow-hidden">
                    <div x-show="activeTab === 'tabAll'" x-transition:enter="transition-all duration-300 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10 dark:bg-secondary-light/15">
                          <i class="fa fa-user-edit text-secondary dark:text-secondary-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            User Photo Changed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            John Doe changed his avatar photo
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Mon, June 14, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">08:00 - 09:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">Frontend Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 dark:bg-accent-light/15">
                          <i class="fa-solid fa-image text-primary dark:text-accent-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Images Added
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Mores Clarke added new image gallery
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10 dark:bg-success/15">
                          <i class="fa fa-leaf text-success"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Design Completed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Robert Nolan completed the design of the CRM
                            application
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Wed, June 21, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">16:00 - 20:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">UI/UX Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <i class="fa fa-project-diagram text-warning"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            ER Diagram
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Team completed the ER diagram app
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            THU, May 11, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">10:00 - 11:30</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                            <span class="line-clamp-1">Interview, Konnor Guzman
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10 dark:bg-error/15">
                          <i class="fa fa-history text-error"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Weekly Report
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            The weekly report was uploaded
                          </div>
                        </div>
                      </div>
                    </div>
                    <div x-show="activeTab === 'tabAlerts'" x-transition:enter="transition-all duration-300 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4" style="display: none;">
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10 dark:bg-secondary-light/15">
                          <i class="fa fa-user-edit text-secondary dark:text-secondary-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            User Photo Changed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            John Doe changed his avatar photo
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 dark:bg-accent-light/15">
                          <i class="fa-solid fa-image text-primary dark:text-accent-light"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Images Added
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Mores Clarke added new image gallery
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10 dark:bg-success/15">
                          <i class="fa fa-leaf text-success"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Design Completed
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Robert Nolan completed the design of the CRM
                            application
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <i class="fa fa-project-diagram text-warning"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            ER Diagram
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            Team completed the ER diagram app
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10 dark:bg-error/15">
                          <i class="fa fa-history text-error"></i>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Weekly Report
                          </p>
                          <div class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                            The weekly report was uploaded
                          </div>
                        </div>
                      </div>
                    </div>
                    <div x-show="activeTab === 'tabEvents'" x-transition:enter="transition-all duration-300 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4" style="display: none;">
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Mon, June 14, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">08:00 - 09:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">Frontend Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Wed, June 21, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">16:00 - 20:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">UI/UX Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            THU, May 11, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">10:00 - 11:30</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                            <span class="line-clamp-1">Interview, Konnor Guzman
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Mon, Jul 16, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">06:00 - 16:00</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>

                            <span class="line-clamp-1">Laravel Conf</span>
                          </div>
                        </div>
                      </div>
                      <div class="flex items-center space-x-3">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                          <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                          </svg>
                        </div>
                        <div>
                          <p class="font-medium text-slate-600 dark:text-navy-100">
                            Wed, Jun 16, 2021
                          </p>
                          <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                            <span class="shrink-0">15:30 - 11:30</span>
                            <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
                            <span class="line-clamp-1">Interview, Jonh Doe
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div x-show="activeTab === 'tabLogs'" x-transition:enter="transition-all duration-300 easy-in-out" x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]" x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]" class="is-scrollbar-hidden overflow-y-auto px-4" style="display: none;">
                      <div class="mt-8 pb-8 text-center">
                        <img class="mx-auto w-36" src="images/illustrations/empty-girl-box.svg" alt="image">
                        <div class="mt-5">
                          <p class="text-base font-semibold text-slate-700 dark:text-navy-100">
                            No any logs
                          </p>
                          <p class="text-slate-400 dark:text-navy-300">
                            There are no unread logs yet
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </nav>

    <!-- Main Searchbar -->
    <div x-show="$store.breakpoints.isXs &amp;&amp; $store.global.isSearchbarActive" x-transition:enter="easy-out transition-all" x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in transition-all" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="fixed inset-0 z-[100] flex flex-col bg-white dark:bg-navy-700 sm:hidden" style="display: none;">
      <div class="flex items-center space-x-2 bg-slate-100 px-3 pt-2 dark:bg-navy-800">
        <button class="btn -ml-1.5 h-7 w-7 shrink-0 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25" @click="$store.global.isSearchbarActive = false">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <input x-effect="$store.global.isSearchbarActive &amp;&amp; $nextTick(() => $el.focus() );" class="form-input h-8 w-full bg-transparent placeholder-slate-400 dark:placeholder-navy-300" type="text" placeholder="Search here...">
      </div>

      <div x-data="{activeTab:'tabAll'}" class="is-scrollbar-hidden flex shrink-0 overflow-x-auto bg-slate-100 px-2 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
        <button @click="activeTab = 'tabAll'" :class="activeTab === 'tabAll' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-primary dark:border-accent text-primary dark:text-accent-light">
          All
        </button>
        <button @click="activeTab = 'tabFiles'" :class="activeTab === 'tabFiles' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
          Files
        </button>
        <button @click="activeTab = 'tabChats'" :class="activeTab === 'tabChats' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
          Chats
        </button>
        <button @click="activeTab = 'tabEmails'" :class="activeTab === 'tabEmails' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
          Emails
        </button>
        <button @click="activeTab = 'tabProjects'" :class="activeTab === 'tabProjects' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
          Projects
        </button>
        <button @click="activeTab = 'tabTasks'" :class="activeTab === 'tabTasks' ? 'border-primary dark:border-accent text-primary dark:text-accent-light' : 'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'" class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5 border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100">
          Tasks
        </button>
      </div>

      <div class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2">
        <div class="is-scrollbar-hidden mt-3 flex space-x-4 overflow-x-auto px-3">
          <a href="apps-kanban.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-success text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Kanban
            </p>
          </a>
          <a href="dashboards-crm-analytics.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-secondary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Analytics
            </p>
          </a>
          <a href="apps-chat.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-info text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Chat
            </p>
          </a>
          <a href="apps-filemanager.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-error text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Files
            </p>
          </a>
          <a href="dashboards-crypto-1.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-secondary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Crypto
            </p>
          </a>
          <a href="dashboards-banking-1.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-primary text-white dark:bg-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Banking
            </p>
          </a>
          <a href="apps-todo.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-info text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Todo
            </p>
          </a>

          <a href="dashboards-orders.html" class="w-14 text-center">
            <div class="avatar size-12">
              <div class="is-initial rounded-full bg-warning text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
              </div>
            </div>
            <p class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
              Orders
            </p>
          </a>
        </div>

        <div class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3 dark:bg-navy-800">
          <p class="text-xs uppercase">Recent</p>
          <a href="#" class="text-tiny+ font-medium uppercase text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
            View All
          </a>
        </div>

        <div class="mt-1 font-inter font-medium">
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-chat.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <span>Chat App</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-filemanager.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
            </svg>
            <span>File Manager App</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-mail.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <span>Email App</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-kanban.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
            </svg>
            <span>Kanban Board</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="apps-todo.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>Todo App</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-crypto-2.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>

            <span>Crypto Dashboard</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-banking-2.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
            </svg>

            <span>Banking Dashboard</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-crm-analytics.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
            </svg>

            <span>Analytics Dashboard</span>
          </a>
          <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100" href="dashboards-influencer.html">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>

            <span>Influencer Dashboard</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
      <div class="flex items-center space-x-4 py-5 lg:py-6">
        <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
          Dashboard
        </h2>
      </div>

     {{-- Question's Search Block --}}
      <div class="relative flex flex-col items-center justify-center">
        {{-- <div class="absolute right-0 top-0 -mt-8 hidden max-w-xs p-4 lg:block">
          <img src="backend/images/illustrations/help.svg" alt="image">
        </div> --}}

        <h2 class="mt-8 text-xl font-medium text-slate-600 dark:text-navy-100 lg:text-2xl">
          How we can help you?
        </h2>

        {{-- Question Ask/Search Bar --}}
        <div class="relative mt-6 w-full max-w-md">
          <input class="form-input peer h-12 w-full rounded-full border border-slate-300 bg-slate-50 px-4 py-2 pl-9 text-base placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-900 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Search your question" type="text">
          <div class="absolute left-0 top-0 flex h-12 w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
            <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
          </div>
        </div>

        {{-- Popular Searched --}}
        <div class="inline-space mt-3 flex flex-wrap items-center justify-center">
          <span>Popular searched:</span>
          <div>
            @foreach ($popularQuestions as $question)
              <a href="#" class="tag rounded-full bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                 {{ $question }}
              </a>
            
            @endforeach
          </div>
        </div>
      </div>

      
      <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

        {{-- Sidebar --}}
        <div class="col-span-12 lg:col-span-4 xl:col-span-3">
         
          <div class="card p-4 sm:px-5">

            {{-- Item Block 1 --}}
            <ul class="space-y-3.5 font-inter font-medium">
              
              {{-- Iterm 1: --}}
              <li>
                <a class="inline-flex items-center space-x-2 tracking-wide text-primary outline-none dark:text-accent-light" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-primary dark:text-accent-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                  </svg>
                  <span>FAQs</span>
                </a>
              </li>

               {{-- Iterm 2: --}}
              <li>
                <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path>
                  </svg>

                  <span>SMMES</span>
                </a>
              </li>

               {{-- Iterm 3: --}}
              <li>
                <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                  </svg>
                  <span>Lorem 3</span>
                </a>
              </li>

                {{-- Iterm 4: --}}
              <li>
                <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z"></path>
                  </svg>
                  <span>Lorem 4</span>
                </a>
              </li>
            </ul>

            {{-- Item Block 2 --}}
            <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
            <ul class="space-y-3.5 font-inter font-medium">

              {{-- Iterm 5: --}}
              <li>
                <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                  </svg>

                  <span>Lorem 5</span>
                </a>
              </li>

              {{-- Iterm 6: --}}
              <li>
                <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" viewBox="0 0 24 24" fill="none">
                    <path d="M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12.0449 15.8486C12.625 15.8486 13.1318 15.6729 13.5654 15.3213C13.999 14.9697 14.2393 14.5303 14.2861 14.0029H15.8242C15.7949 14.5479 15.6074 15.0664 15.2617 15.5586C14.916 16.0508 14.4531 16.4434 13.873 16.7363C13.2988 17.0293 12.6895 17.1758 12.0449 17.1758C10.75 17.1758 9.71875 16.7451 8.95117 15.8838C8.18945 15.0166 7.80859 13.833 7.80859 12.333V12.0605C7.80859 11.1348 7.97852 10.3115 8.31836 9.59082C8.6582 8.87012 9.14453 8.31055 9.77734 7.91211C10.416 7.51367 11.1689 7.31445 12.0361 7.31445C13.1025 7.31445 13.9873 7.63379 14.6904 8.27246C15.3994 8.91113 15.7773 9.74023 15.8242 10.7598H14.2861C14.2393 10.1445 14.0049 9.64062 13.583 9.24805C13.167 8.84961 12.6514 8.65039 12.0361 8.65039C11.21 8.65039 10.5684 8.94922 10.1113 9.54688C9.66016 10.1387 9.43457 10.9971 9.43457 12.1221V12.4297C9.43457 13.5254 9.66016 14.3691 10.1113 14.9609C10.5625 15.5527 11.207 15.8486 12.0449 15.8486Z" fill="currentColor"></path>
                  </svg>

                  <span>Lorem 6</span>
                </a>
              </li>

              {{-- Iterm 7: --}}
              <li>
                <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                  </svg>
                  <span>Lorem 7</span>
                </a>
              </li>

              {{-- Iterm 8: --}}
              <li>
                <a class="group inline-flex items-center space-x-2 tracking-wide outline-none transition-colors hover:text-slate-800 focus:text-navy-800 dark:hover:text-navy-100 dark:focus:text-navy-100" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                  </svg>
                  <span>Lorem 8</span>
                </a>
              </li>
            </ul>
          </div>

        </div>

        {{-- Main Content: Frequently Asked Questions --}}
        <div class="col-span-12 lg:col-span-8 xl:col-span-9">

          {{-- Main Section Header --}}
          <div class="flex items-center space-x-2 pb-4">

            {{-- Icon --}}
            <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-primary/10 p-1 text-primary dark:bg-accent-light/10 dark:text-accent-light">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
              </svg>
            </div>

            {{-- Title --}}
            <h4 class="text-lg font-medium text-slate-700 dark:text-navy-100">
              Frequently Asked Questions
            </h4>

          </div>

          {{-- Content --}}
          <div x-data="{ expandedItem: null }" class="space-y-4 sm:space-y-5 w-full">
            @foreach ($faqItems as $index => $item)
              <div class="card" x-data="{ expanded: false }">
                <div class="flex cursor-pointer items-center justify-between p-4" @click="expanded = !expanded">
                  <h3 class="text-base font-medium text-slate-700 dark:text-navy-100">
                    {{ $item['question'] }}
                  </h3>
                  <div :class="{ '-rotate-180': expanded }" class="text-sm font-normal leading-none text-slate-400 transition-transform duration-300 dark:text-navy-300">
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


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg>

</body>

  @endsection