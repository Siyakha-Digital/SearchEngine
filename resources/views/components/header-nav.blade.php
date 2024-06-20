<div class="is-scrollbar-hidden -mx-2 hidden h-12 items-center space-x-2 overflow-y-auto font-inter sm:flex"
    x-data="{ selectedTab: localStorage.getItem('selectedTab') || 'dashboard' }" x-init="$watch('selectedTab', value => localStorage.setItem('selectedTab', value))">
    {{-- Search Dashboard --}}
    <a href="{{ route('dashboard') }}">
        <button @click="selectedTab = 'dashboard'"
            :class="selectedTab === 'dashboard' ? 'bg-slate-150 text-slate-800 dark:bg-navy-500 dark:text-navy-100 rounded-full' :
                'text-slate-600 hover:text-slate-800 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25 rounded-full'"
            class="btn space-x-2 px-2 py-1.5 text-xs+ font-medium leading-none">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-opacity=".3"
                    d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z">
                </path>
                <path fill="currentColor"
                    d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z">
                </path>
                <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z"></path>
                <path fill="currentColor"
                    d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z"></path>
            </svg>
            <span>Search Dashboard</span>
        </button>
    </a>

    {{-- SMMEs Tab --}}
    <a href="{{ route('smmes.index') }}">
        <button @click="selectedTab = 'smmes'"
            :class="selectedTab === 'smmes' ? 'bg-slate-150 text-slate-800 dark:bg-navy-500 dark:text-navy-100 rounded-full' :
                'text-slate-600 hover:text-slate-800 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25 rounded-full'"
            class="btn space-x-2 px-2 py-1.5 text-xs+ font-medium leading-none">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-opacity=".3" d="M3 9v12h18V9l-9-5-9 5z"></path>
                <path fill="currentColor"
                    d="M13 10v2h-2v-2h2zm0 4v6h-2v-6h2zm4-4v2h-2v-2h2zm0 4v6h-2v-6h2zm-8 0v6H7v-6h2zm0-4V8H7v2h2zm10 2v2h-2v-2h2zm-2-4v2h-2V8h2zM5 10h2v2H5v-2zm0 4h2v6H5v-6z">
                </path>
                <path fill="currentColor" d="M21 20H3v2h18v-2z"></path>
            </svg>
            <span>SMMEs</span>
        </button>
    </a>

    {{-- FAQ & Ask Tab --}}
    <a href="{{ route('faqs') }}">
        <button @click="selectedTab = 'faq'"
            :class="selectedTab === 'faq' ? 'bg-slate-150 text-slate-800 dark:bg-navy-500 dark:text-navy-100 rounded-full' :
                'text-slate-600 hover:text-slate-800 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25 rounded-full'"
            class="btn space-x-2 px-2 py-1.5 text-xs+ font-medium leading-none">
            <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-opacity=".3"
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                </path>
                <path fill="currentColor" d="M11 11h2v6h-2zm0-4h2v2h-2z"></path>
            </svg>
            <span>FAQs & Ask</span>
        </button>
    </a>

    {{-- Search Tab --}}
    <a href="{{ route('search.index') }}">
        <button @click="selectedTab = 'search'"
            :class="selectedTab === 'search' ? 'bg-slate-150 text-slate-800 dark:bg-navy-500 dark:text-navy-100 rounded-full' :
                'text-slate-600 hover:text-slate-800 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-200 dark:hover:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25 rounded-full'"
            class="btn space-x-2 px-2 py-1.5 text-xs+ font-medium leading-none">
            <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-opacity="0.25"
                    d="M21 10c0 5.523-4.477 10-10 10S1 15.523 1 10 5.477 0 11 0s10 4.477 10 10zm-10 8a8 8 0 100-16 8 8 0 000 16z"
                    fill="currentColor" />
                <path fill-opacity="0.5"
                    d="M22.707 21.707a1 1 0 01-1.414 0l-4.243-4.243a8 8 0 111.414-1.414l4.243 4.243a1 1 0 010 1.414z"
                    fill="currentColor" />
                <path d="M14 10a4 4 0 11-8 0 4 4 0 018 0z" fill="currentColor" />
            </svg>
            <span>Let's Search</span>
        </button>
    </a>
</div>
