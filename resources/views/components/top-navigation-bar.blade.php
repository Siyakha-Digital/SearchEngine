<?php
// Example Popular Searches
$popularSearches = [
    'smmes south africa',
    'smme meaning',
    'smmes funding',
    'smme meaning in business',
    'smme examples',
    'smme requirements',
    'smme contact details',
    'smme application form',
    // Add more popular searches as needed
];
?>


<nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
    <!-- App Header  -->
    <div class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden sm:flex-col">
        <!-- Header Items -->
        <div class="flex w-full items-center justify-between sm:h-16">

            <div class="hidden items-center space-x-2 sm:flex">
                <span class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                    YowzaSearch
                </span>
            </div>

            <!-- Right: Header buttons -->
            <div class="-mr-1.5 flex items-center space-x-2">
                <!-- Mobile Search Toggle -->
                <button @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive"
                    class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-slate-500 dark:text-navy-100"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <!-- Main Searchbar -->
                <template x-if="$store.breakpoints.smAndUp">
                    <div class="flex" x-data="usePopper({ placement: 'bottom-end', offset: 12 })"
                        @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)">
                        <div class="relative mr-4 flex h-8">
                            <input placeholder="Search here..."
                                class="form-input peer h-full rounded-full bg-slate-150 px-4 pl-9 text-xs+ text-slate-800 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:text-navy-100 dark:placeholder-navy-300 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                :class="isShowPopper ? 'w-80' : 'w-60'" @focus="isShowPopper= true" type="text"
                                x-ref="popperRef">
                            <div
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 transition-colors duration-200"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z">
                                    </path>
                                </svg>
                            </div>
                        </div>

                        <div :class="isShowPopper && 'show'" class="popper-root" x-ref="popperRoot">

                            <div
                                class="popper-box flex max-h-[calc(100vh-6rem)] w-80 flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark">


                                <div class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2">


                                    {{-- Popular Search Results --}}
                                    <div
                                        class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3 dark:bg-navy-800">
                                        <p class="text-xs uppercase">Popular Searches</p>
                                    </div>

                                    {{-- Popular Searches --}}
                                    <div class="mt-1 font-inter font-medium">
                                        @foreach ($popularSearches as $search)
                                            <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                href="apps-chat.html">
                                                <span> {{ $search }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="javascript:void(0)" onclick="event.preventDefault(); this.closest('form').submit();" class="tag rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        Sign out
                    </a>
                </form>
            </div>
        </div>


        <!-- Header Navigation -->
        @include('components.header-nav')

    </div>

</nav>
