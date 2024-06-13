@extends('layouts.app')

@section('title', 'Answer Details')

@section('content')
    <h1>Answer</h1>
    <p>{{ $answer->answer_text }}</p>
    <a href="{{ route('questions.show', $answer->question_id) }}">Back to Question</a>
@endsection
