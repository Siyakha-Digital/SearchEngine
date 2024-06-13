
<!-- resources/views/questions/create.blade.php -->
@extends('layouts.app')

@section('title', 'Ask a Question')

@section('content')
    <h1>Ask a Question</h1>
    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        <div>
            <label for="question_text">Question:</label>
            <textarea id="question_text" name="question_text" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
