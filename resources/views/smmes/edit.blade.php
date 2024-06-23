

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
                        You're editing {{ $smme->name }}
                    </h2>
                </div>

                <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

                    {{-- Main Content: Dashbpard --}}
                    <div class="flex items-center col-span-12 lg:col-span-8 xl:col-span-9">

                        <form action="{{ route('smmes.update', $smme->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                
                              {{-- Form Container --}}
                              <div class="mt-4 space-y-5">

                                {{-- Error Message --}}
                                @if ($errors->any())
                                    <div class="text-sm text-error">
                                        <strong>Oops! There were some problems with your submission. Please check the form
                                            below for errors.</strong>
                                    </div>
                                @endif

                                {{-- Show specific error --}}
                                
                                

                                {{-- Success Message --}}
                                @if (session('success'))
                                    <div class="text-sm text-success">
                                        <strong>{{ session('success') }}</strong>
                                    </div>
                                @endif

                                {{-- Name --}}
                                <label class="block">
                                    <span>Name</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-9/12 rounded-full border border-slate-300 px-3 py-2 pl-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            type="text" id="name" name="name"
                                            placeholder="Enter your SMME's name .." value="{{ $smme->name }}"
                                            maxlength="50">
                                    </span>
                                    @error('name')
                                        <span class="text-sm text-error">{{ $message }}</span>
                                    @enderror
                                </label>

                                {{-- Slogan --}}
                                <label class="block">
                                    <span>Slogan</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-9/12 rounded-full border border-slate-300 px-3 py-2 pl-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            type="text" id="slogan" name="slogan"
                                            placeholder="Enter your SMME's slogan .." value="{{ $smme->slogan }}"
                                            maxlength="50">
                                    </span>
                                    @error('slogan')
                                        <span class="text-sm text-error">{{ $message }}</span>
                                    @enderror
                                </label>

                                {{-- Location --}}
                                <label class="block">
                                    <span>Location</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-9/12 rounded-full border border-slate-300 px-3 py-2 pl-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            type="text" id="location" name="location"
                                            placeholder="Enter your SMME's location .." value="{{ $smme->location }}"
                                            maxlength="50" required>
                                    </span>
                                    @error('location')
                                        <span class="text-sm text-error">{{ $message }}</span>
                                    @enderror
                                </label>

                                {{-- Contact Info --}}
                                <label class="block">
                                    <span>Contact Info</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-9/12 rounded-full border border-slate-300 px-3 py-2 pl-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            type="text" id="contact_info" name="contact_info"
                                            placeholder="Enter your SMME's contact info .."
                                            value="{{ $smme->contact_info }} maxlength="50" required>
                                    </span>
                                    @error('contact_info')
                                        <span class="text-sm text-error">{{ $message }}</span>
                                    @enderror
                                </label>

                                {{-- Description --}}
                                <label class="block">
                                    <span>Description</span><br>
                                    <textarea
                                        class="form-textarea mt-1.5 w-full rounded-2xl border border-slate-300 p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        id="description" name="description" rows="10" maxlength="65535"
                                        placeholder="Enter the description of your SMME here. Be as detailed as possible.">{{ $smme->description }}</textarea><br>
                                    @error('description')
                                        <span class="text-sm text-error">{{ $message }}</span>
                                    @enderror
                                </label>

                                {{-- Image --}}
                                <label class="block">
                                    <span>Change Previous Image</span>
                                    <span class="relative mt-1.5 flex">
                                        <input
                                            class="form-input peer w-9/12 rounded-full border border-slate-300 px-3 py-2 pl-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                            type="file" id="image" name="image" accept="image/*" value="{{ $smme->image }}"
                                            >
                                    </span>
                                    @error('image')
                                        <span class="text-sm text-error">{{ $message }}</span>
                                    @enderror
                                </label>

                                {{-- Category --}}
                                <label class="block">
                                    <span>Category</span>
                                    <span class="relative mt-1.5 flex">
                                        <select
                                            class="form-input peer w-9/12 rounded-lg border border-slate-300 px-3 py-2 pl-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent custom-select"
                                            id="category" name="category[]" multiple required>
                                            @php
                                            $selectedCategories = old('category', $smme->category ?? []);
                                            @endphp
                                            <option value="Food & Beverages" @if(in_array("Food & Beverages", $selectedCategories)) selected @endif>Food & Beverages</option>
                                            <option value="Fashion" @if(in_array("Fashion", $selectedCategories)) selected @endif>Fashion</option>
                                            <option value="Construction" @if(in_array("Construction", $selectedCategories)) selected @endif>Construction</option>
                                            <option value="Technology" @if(in_array("Technology", $selectedCategories)) selected @endif>Technology</option>
                                            <option value="Other" @if(in_array("Other", $selectedCategories)) selected @endif>Other</option>
                                            <!-- Add other categories as needed -->
                                        </select>
                                    </span>
                                    @error('category')
                                        <span class="text-sm text-error">{{ $message }}</span>
                                    @enderror
                                </label>


                                {{-- Create Button --}}
                                <div class="flex justify-start">
                                    <button
                                        class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                        type="submit">
                                        Update 
                                    </button>
                                </div>

                            </div>

                            
                        </form>


                           
                    </div>
                </div>
            </main>
        </div>
        

    </body>
@endsection



