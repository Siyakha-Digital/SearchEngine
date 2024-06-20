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
                        SMMES & Their Categories
                    </h2>
                </div>

                <div class="mt-20 grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">

                    {{-- Sidebar --}}
                    @include('components.mini-sidebar-menu')

                    {{-- Main Content: Dashbpard --}}
                    <div class="flex items-center col-span-12 lg:col-span-8 xl:col-span-9">

                        <div class="container">
    
                            <a href="{{ route('smmes.create') }}" class="btn btn-primary mb-3">Create SMME</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>SMME ID</th>
                                        <th>SMME Name</th>
                                        <th>Categories</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($smmes as $smme)
                                        <tr>
                                            <td>{{ $smme->id }}</td>
                                            <td>{{ $smme->name }}</td>
                                            <td>
                                                @foreach($smme->categories as $category)
                                                    <span class="badge badge-secondary">{{ $category->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('smmes.show', $smme->id) }}" class="btn btn-info">View</a>
                                                <a href="{{ route('smmes.edit', $smme->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('smmes.destroy', $smme->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                <a href="{{ route('smmes.add_category', $smme->id) }}" class="btn btn-success">Add Category</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                     
                    </div>
                </div>
            </main>
        </div>


    </body>
    
@endsection
