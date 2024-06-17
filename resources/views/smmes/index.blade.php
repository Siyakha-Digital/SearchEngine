<!-- resources/views/smmes/index.blade.php -->
@extends('layouts.app', ['slot' => ''])

@section('title', 'SMMEs')

@section('content')

    <h1>SMMEs</h1>

    <a href="{{ route('smmes.create') }}">Create New SMME</a>

    @if ($smmes->isEmpty())
        <p>No SMMEs found.</p>
    @else
        <ul>
            @foreach ($smmes as $smme)
                <li>
                    <a href="{{ route('smmes.show', $smme->id) }}">{{ $smme->name }}</a>
                    <a href="{{ route('smmes.edit', $smme->id) }}">Edit</a>
                    <form action="{{ route('smmes.destroy', $smme->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

@endsection
