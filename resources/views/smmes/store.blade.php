
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
                  <svg x-ignore="" xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                    <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                        Create New SMME
                    </h2>
                </div>

                <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

                    {{-- Main Content: Dashbpard --}}
                    <div class="flex items-center col-span-12 lg:col-span-8 xl:col-span-9">

                        <form method="POST" action="{{ route('smmes.store') }}">
                            @csrf
                        
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                        
                            <div>
                                <label for="category">Category:</label>
                                <input type="text" id="category" name="category" required>
                            </div>
                        
                            <div>
                                <label for="description">Description:</label>
                                <textarea id="description" name="description" required></textarea>
                            </div>
                        
                            <div>
                                <label for="location">Location:</label>
                                <input type="text" id="location" name="location" required>
                            </div>
                        
                            <div>
                                <label for="contact_info">Contact Info:</label>
                                <input type="text" id="contact_info" name="contact_info" required>
                            </div>
                        
                            <button type="submit">Create SMME</button>
                        </form>
                           
                    </div>
                </div>
            </main>
        </div>
        

    </body>
@endsection


