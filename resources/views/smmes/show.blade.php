@extends('layouts.app2')

@section('content')
<body x-data="" class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900">
        @include('components.top-navigation-bar')

        <!-- Main Content Wrapper -->
        <main class="main-content w-full px-4 md:px-6 lg:px-8 pb-8">
            <div class="flex items-center justify-between py-5 lg:py-6">
                <div class="flex items-center space-x-1">
                  <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
            
                  {{-- Header --}}
                  <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50 lg:text-2xl">
                    SMME: {{ $smme->name }}
                  </h2>
                
                </div>
            
                <div class="flex items-center space-x-2">
            
                  <div class="flex">
            
                    {{-- Back to SMME list Button --}}
                    <button class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-9 sm:w-9" onclick="window.location.href='{{ route('smmes.index') }}'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 12H5m7 7l-7-7 7-7"></path>
                        </svg>
                      </button>
            
                  </div>
                </div>
              </div>

            <!-- Image and Slogan -->
            <div class="flex flex-col md:flex-row items-center md:space-x-6 lg:space-x-8 mt-4">
               {{-- Avatar --}}
               <div class="avatar size-20">
                <img class="rounded-full" src="{{ asset('storage/' . $smme->image) }}" style="width: 70px; height:70px;" alt="avatar">
                </div>
                <p class="mt-4 md:mt-0 text-center md:text-left text-lg font-medium text-slate-700 dark:text-navy-200">
                {{ $smme->slogan }}
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                <!-- Main Content: Dashboard -->
                <div class="col-span-1 md:col-span-8 xl:col-span-9">
                    <div class="bg-white dark:bg-navy-800 shadow rounded-lg p-4 sm:p-6 lg:p-8">
                        <p class="pt-3"><u><strong>Category</strong></u><br><br> {{ $smme->category }}</p>
                        <p class="pt-3" style="text-align: justify;"><u><strong>Description</strong></u><br><br> {{ $smme->description }}</p>
                        <p class="pt-3"><u><strong>Location</strong></u><br><br> {{ $smme->location }}</p>
                        <p class="pt-3"><u><strong>Contact Info</strong></u><br><br> {{ $smme->contact_info }}</p>

                        <p class="pt-3">
                            Go back to the available SMMEs list
                            <a href="{{ route('smmes.index') }}" class="tag rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
                              here
                            </a>
                            .
                          </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
@endsection