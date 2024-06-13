<!-- resources/views/smmes/create.blade.php -->
@extends('layouts.app', ['slot' => ''])

@section('title', 'Create SMME')

@section('content')
    <h1>Create SMME</h1>
    <form action="{{ route('smmes.store') }}" method="POST">
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
        <button type="submit">Create</button>
    </form>
@endsection