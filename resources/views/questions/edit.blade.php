<!-- resources/views/questions/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Edit Question')

@section('content')
    <h1>Edit Question</h1>
    <form action="{{ route('questions.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="question_text">Question Text:</label>
            <textarea id="question_text" name="question_text" required>{{ $question->question_text }}</textarea>
        </div>
        <button type="submit">Update Question</button>
    </form>
@endsection