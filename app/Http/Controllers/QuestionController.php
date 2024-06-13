<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function show($id)
    {
        $question = Question::with('answers')->findOrFail($id);
        return view('questions.show', compact('question'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_text' => 'required',
        ]);

        $question = new Question();
        $question->question_text = $request->question_text;
        $question->user_id = auth()->id(); // Assign the authenticated user's ID
        $question->save();

        return redirect()->route('questions.index')->with('success', 'Question posted successfully.');
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question_text' => 'required',
        ]);

        $question = Question::findOrFail($id);
        $question->question_text = $request->question_text;
        $question->user_id = auth()->id(); // Assign the authenticated user's ID
        $question->save();

        return redirect()->route('questions.index')->with('success', 'Question updated successfully.');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('questions.index')->with('success', 'Question deleted successfully.');
    }
}
