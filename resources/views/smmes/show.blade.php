<!-- resources/views/smmes/show.blade.php -->
@extends('layouts.app', ['slot' => ''])

@section('title', 'SMME Details')

@section('content')
    <h1>{{ $smme->name }}</h1>

    <p><strong>Category:</strong> {{ $smme->category }}</p>
    <p><strong>Description:</strong> {{ $smme->description }}</p>
    <p><strong>Location:</strong> {{ $smme->location }}</p>
    <p><strong>Contact Info:</strong> {{ $smme->contact_info }}</p>

    <a href="{{ route('smmes.index') }}">Back to SMME list</a>
@endsection
