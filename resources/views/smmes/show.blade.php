<!-- resources/views/smmes/show.blade.php -->

<x-app-weblayout>
    @section('title', 'SMME Details')

    <div class="container mt-5" style="color: black;">
        <h1 class="mb-4">{{ $smme->name }}</h1>

        <p><strong>Category:</strong> {{ $smme->category }}</p>
        <p><strong>Description:</strong> {{ $smme->description }}</p>
        <p><strong>Location:</strong> {{ $smme->location }}</p>
        <p><strong>Contact Info:</strong> {{ $smme->contact_info }}</p>

        <a href="{{ route('smmes.index') }}" class="btn btn-primary" style="background-color: black; border-color: black; color: white;">Back to SMME list</a>
    </div>
</x-app-weblayout>
