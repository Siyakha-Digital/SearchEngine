<!-- resources/views/smmes/edit.blade.php -->

<x-app-weblayout>
    @section('title', 'Edit SMME')

    <div class="container mt-5" style="color: black;">
        <h1 class="mb-4">Edit SMME</h1>

        <form action="{{ route('smmes.update', $smme->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $smme->name }}" required style="background-color: white; border: 1px solid black; color: black;">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category:</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $smme->category }}" required style="background-color: white; border: 1px solid black; color: black;">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" required style="background-color: white; border: 1px solid black; color: black;">{{ $smme->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location:</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $smme->location }}" required style="background-color: white; border: 1px solid black; color: black;">
            </div>
            <div class="mb-3">
                <label for="contact_info" class="form-label">Contact Info:</label>
                <input type="text" class="form-control" id="contact_info" name="contact_info" value="{{ $smme->contact_info }}" required style="background-color: white; border: 1px solid black; color: black;">
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: black; border-color: black; color: white;">Update</button>
        </form>
    </div>
</x-app-weblayout>
