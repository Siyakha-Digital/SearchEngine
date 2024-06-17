<!-- resources/views/smmes/index.blade.php -->

<x-app-weblayout>
    @section('title', 'SMMEs')

    <div class="container mt-5 text-dark">
        <h1 class="mb-4">SMMEs</h1>

        <a href="{{ route('smmes.create') }}" class="btn btn-primary mb-3" style="background-color: black; border-color: black;">Create New SMME</a>

        @if ($smmes->isEmpty())
            <div class="alert alert-warning" role="alert" style="color: black; background-color: white; border: 1px solid black;">
                No SMMEs found.
            </div>
        @else
            <div class="list-group">
                @foreach ($smmes as $smme)
                    <div class="list-group-item d-flex justify-content-between align-items-center" style="color: black; background-color: white; border: 1px solid black;">
                        <div>
                            <a href="{{ route('smmes.show', $smme->id) }}" class="font-weight-bold" style="color: black;">{{ $smme->name }}</a>
                        </div>
                        <div>
                            <a href="{{ route('smmes.edit', $smme->id) }}" class="btn btn-sm btn-warning" style="background-color: black; border-color: black; color: white;">Edit</a>
                            <form action="{{ route('smmes.destroy', $smme->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" style="background-color: black; border-color: black;">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-app-weblayout>
