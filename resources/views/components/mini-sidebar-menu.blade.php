<div class="col-span-12 lg:col-span-4 xl:col-span-3">

<div class="card p-4 sm:px-5">

    {{-- Item Block 1 --}}
    <ul class="space-y-3.5 font-inter font-medium">

        {{-- Iterm 1: --}}
        <li>
            <a class="inline-flex items-center space-x-2 tracking-wide text-primary outline-none dark:text-accent-light"
            href="{{ route('dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-primary dark:text-accent-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h7v7H3V3zm11 0h7v7h-7V3zM3 14h7v7H3v-7zm11 0h7v7h-7v-7z"></path>
              </svg>
                <span>Search Dashboard</span>
            </a>
        </li>

    </ul>

    {{-- Item Block 2 --}}
    <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
    <ul class="space-y-3.5 font-inter font-medium">

         {{-- Iterm 2: --}}
        <li>
            <a class="inline-flex items-center space-x-2 tracking-wide text-primary outline-none dark:text-accent-light"
            href="{{ route('smmes.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-primary dark:text-accent-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 17v-2a4 4 0 014-4h14M3 12V9a4 4 0 014-4h4m10 5v6a4 4 0 01-4 4H5a4 4 0 01-4-4v-4a4 4 0 014-4h12Z"></path>
              </svg>
                <span>SMMEs</span>
            </a>
        </li>
    </ul>

    {{-- Item Block 3 --}}
    <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
    <ul class="space-y-3.5 font-inter font-medium">

         {{-- Iterm 3: --}}
          
        <li>
            <a class="inline-flex items-center space-x-2 tracking-wide text-primary outline-none dark:text-accent-light"
            href="{{ route('faqs') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-primary dark:text-accent-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c1.104 0 2 .896 2 2 0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2zm0 4c1.104 0 2 .896 2 2v3h-4v-3c0-1.104.896-2 2-2zm0 9c-5.523 0-10-4.477-10-10S6.477 3 12 3s10 4.477 10 10-4.477 10-10 10z"></path>
              </svg>
                <span>FAQs & Ask</span>
            </a>
        </li>
    </ul>

    {{-- Item Block 4 --}}
    <div class="my-4 h-px bg-slate-200 dark:bg-navy-500"></div>
    <ul class="space-y-3.5 font-inter font-medium">

         {{-- Iterm 4: --}}
          
        <li>
            <a class="inline-flex items-center space-x-2 tracking-wide text-primary outline-none dark:text-accent-light"
            href="{{ route('search') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-primary dark:text-accent-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
                <span>Search</span>
            </a>
        </li>
    </ul>
</div>

</div>