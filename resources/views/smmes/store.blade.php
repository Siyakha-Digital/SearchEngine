<x-app-weblayout>
    @section('title', 'Create SMME')

    <div class="container mt-5" style="color: black;">
        <h1>Create New SMME</h1>

        <form method="POST" action="{{ route('smmes.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required style="background-color: white; border: 1px solid black; color: black;">
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category:</label>
                <input type="text" class="form-control" id="category" name="category" required style="background-color: white; border: 1px solid black; color: black;">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" required style="background-color: white; border: 1px solid black; color: black;"></textarea>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location:</label>
                <input type="text" class="form-control" id="location" name="location" required style="background-color: white; border: 1px solid black; color: black;">
            </div>

            <div class="mb-3">
                <label for="contact_info" class="form-label">Contact Info:</label>
                <input type="text" class="form-control" id="contact_info" name="contact_info" required style="background-color: white; border: 1px solid black; color: black;">
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: black; border-color: black; color: white;">Create SMME</button>
        </form>
    </div>
</x-app-weblayout>
