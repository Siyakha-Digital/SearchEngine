@extends('layouts.app')

@section('title', 'Questions')

@section('content')
    <h1>Questions</h1>
    <a href="{{ route('questions.create') }}">Ask a Question</a>

    @foreach ($questions as $question)
        <div>
            <h2>{{ $question->question_text }}</h2>
            <a href="{{ route('questions.show', $question->id) }}">View Details</a>
            <a href="{{ route('answers.create', ['question_id' => $question->id]) }}">Answer</a> <!-- Link to answer the question -->
            <a href="{{ route('questions.edit', $question->id) }}">Edit</a>
            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
