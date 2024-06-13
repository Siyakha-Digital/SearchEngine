@extends('layouts.app')

@section('title', 'Question Details')

@section('content')
    <h1>{{ $question->question_text }}</h1>

    <h2>Answers</h2>

    <ul>
        @foreach ($question->answers as $answer)
            <li>{{ $answer->answer_text }}</li>
        @endforeach
    </ul>

    <form action="{{ route('answers.store') }}" method="POST">
        @csrf
        <input type="hidden" name="question_id" value="{{ $question->id }}">
        <div>
            <label for="answer_text">Your Answer:</label>
            <textarea id="answer_text" name="answer_text" required></textarea>
        </div>
        <button type="submit">Submit Answer</button>
    </form>

    <a href="{{ route('questions.index') }}">Back to Questions</a>
@endsection
