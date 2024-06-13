@extends('layouts.app', ['slot' => ''])

@section('title', 'Edit SMME')

@section('content')
    <h1>Edit SMME</h1>
    <form action="{{ route('smmes.update', $smme->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $smme->name }}" required>
        </div>
        <div>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="{{ $smme->category }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $smme->description }}</textarea>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{ $smme->location }}" required>
        </div>
        <div>
            <label for="contact_info">Contact Info:</label>
            <input type="text" id="contact_info" name="contact_info" value="{{ $smme->contact_info }}" required>
        </div>
        <button type="submit">Update</button>
    </form>
@endsection
