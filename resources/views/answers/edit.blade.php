@extends('layouts.app')

@section('title', 'Edit Answer')

@section('content')
    <h1>Edit Answer</h1>

    <form action="{{ route('answers.update', $answer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="answer_text">Your Answer:</label>
            <textarea id="answer_text" name="answer_text" required>{{ $answer->answer_text }}</textarea>
        </div>
        <button type="submit">Update Answer</button>
    </form>

    <a href="{{ route('answers.show', $answer->id) }}">Back to Answer</a>
@endsection
