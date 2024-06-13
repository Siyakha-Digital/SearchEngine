@extends('layouts.app')

@section('title', 'Create SMME')

@section('content')

<h1>Create New SMME</h1>

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

@endsection
