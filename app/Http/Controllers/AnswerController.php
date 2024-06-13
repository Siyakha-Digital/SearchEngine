<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question; // Import the Question model
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function create(Request $request)
    {
        $question_id = $request->query('question_id');
        $question = Question::findOrFail($question_id);

        return view('answers.create', compact('question'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_text' => 'required',
        ]);

        $answer = new Answer();
        $answer->answer_text = $request->answer_text;
        $answer->question_id = $request->question_id;
        $answer->user_id = auth()->id();
        $answer->save();

        return redirect()->route('questions.show', $answer->question_id)->with('success', 'Answer posted successfully.');
    }

    public function show($id)
    {
        $answer = Answer::findOrFail($id);
        return view('answers.show', compact('answer'));
    }

    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        return view('answers.edit', compact('answer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'answer_text' => 'required',
        ]);

        $answer = Answer::findOrFail($id);
        $answer->update($request->all());

        return redirect()->route('answers.show', $answer->id)->with('success', 'Answer updated successfully.');
    }
}
