@extends('layouts.app')

@section('title', 'Post a New Answer')

@section('content')
    <h1>Post a New Answer to: {{ $question->question_text }}</h1>

    <form action="{{ route('answers.store') }}" method="POST">
        @csrf
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <div>
            <label for="answer_text">Your Answer:</label>
            <textarea id="answer_text" name="answer_text" required></textarea>
        </div>
        <button type="submit">Submit Answer</button>
    </form>

    <a href="{{ route('questions.show', $question->id) }}">Back to Question</a>
@endsection
